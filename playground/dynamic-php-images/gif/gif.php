<?php


	//Leave all this stuff as it is
	date_default_timezone_set('Europe/London');
	include 'GIFEncoder.class.php';
	include 'php52-fix.php';
	$name = strtoupper($_GET['name']);
	$length = strlen($name);

	// Your image link
	$image = imagecreatefromgif('images/city-scarf.gif');
	list($w,$h) = getimagesize('images/city-scarf-1.jpg');

	$delay = 1;// milliseconds
	
	if ($length <=6 ){$fontsize = 78; $yOffset = 205;} 
	else if ($length > 6 && $length <=8) {$fontsize = 72; $yOffset = 200;} 
	else if ($length > 8 && $length <=10) {$fontsize = 60; $yOffset = 196;} 
	else if ($length > 10 && $length <=12) {$fontsize = 46; $yOffset = 192;} 
	else {$fontsize = 40; $yOffset = 186;}

	for($i = 1; $i <= 14; $i++){ // number of frames	
					
		/* This is the countdown timer */
		$url = 'images/city-scarf-'.$i.'.jpg';
		$image = imagecreatefromjpeg($url);
		
		$font = array(
			'angle'=>0, // Angle of the text
			'file'=>getcwd().'/OpenSans-Bold.ttf', // Font path
			'color'=>imagecolorallocate($image, 13,50,101), // RGB Colour of the text
		);
		
		
		if ($i <= 8) {$y = $yOffset - (2*$i);}
		else {$y = ($yOffset - (2*14)) + (2*($i-2));} // 14 is max number of frames 
		
		$width = imagettfbbox($fontsize,0,$font['file'],$name);
	
		if($width[0] < 0) {$a = $width[0]*(-1);} // If bottom-left x is negative, make it positive!
		
		$b = $width[2]; // Bottom-right x.
		$textWidth = $a+$b;
			
		$x = ($w/2) - ($textWidth/2);
		
			
		imagettftext($image , $fontsize , $font['angle'] , $x , $y , $font['color'] , $font['file'], $name );
		
		ob_start();
		imagegif($image);
		$frames[]=ob_get_contents();
		$delays[]=$delay;
		$loops = 0;
		ob_end_clean();
	}

	//expire this image instantly
	header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );
	header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
	header( 'Cache-Control: no-store, no-cache, must-revalidate' );
	header( 'Cache-Control: post-check=0, pre-check=0', false );
	header( 'Pragma: no-cache' );
	$gif = new AnimatedGif($frames,$delays,$loops);
	$gif->display();
	imagedestroy($image);
	
?>