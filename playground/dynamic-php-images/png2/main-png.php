<?php

	header('Content-type: image/png');

	// Create Image From Existing File
	$image = imagecreatefrompng(getcwd().'/city-shirts-lineup-2a.png');
	imageAlphaBlending($image, true);
	imageSaveAlpha($image, true);
	
	list($w,$h) = getimagesize(getcwd().'/city-shirts-lineup-2a.png');

	// Set Text to Be Printed On Image
	$text = strtoupper($_GET['name']);
	$length = strlen($text);
	
	if ($length <=8 ){$fontsize = 18;} 
	else if ($length > 8 && $length <=10) {$fontsize = 16;} 
	else if ($length > 10 && $length <=12) {$fontsize = 12;} 
	else {$fontsize = 11;}
	
	$font = array(
		'size'=>$fontsize, // Font size, in pts usually.
		'angle'=>0, // Angle of the text
		'y-offset'=>74, // The vertical alignment, from top
		'file'=>getcwd().'/OpenSans-Bold.ttf', // Font path
		'color'=>imagecolorallocate($image, 13,50,101), // RGB Colour of the text
	);
	
	$width = imagettfbbox($fontsize,0,$font['file'],$text);
	
	if($width[0] < 0) {$a = $width[0]*(-1);} // If bottom-left x is negative, make it positive!
	
	$b = $width[2]; // Bottom-right x.
	$textWidth = $a+$b;
		
	$x = ($w/2) - ($textWidth/2) - 2;

	// Print Text On Image
	imagettftext($image , $font['size'] , $font['angle'] , $x , $font['y-offset'] , $font['color'] , $font['file'], $text );

	// Send Image to Browser
	imagepng($image, NULL);

	// Clear Memory
	imagedestroy($image);

?>