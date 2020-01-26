<?php


	//Leave all this stuff as it is
	date_default_timezone_set('Europe/London');
	include 'GIFEncoder.class.php';
	include 'php52-fix.php';
	$time = $_GET['time'];
	$future_date = new DateTime(date('r',strtotime($time)));
	$time_now = time();
	$now = new DateTime(date('r', $time_now));
	$frames = array();	
	$delays = array();


	// Your image link
	$image = imagecreatefrompng('images/main_07.png');

	$delay = 100;// milliseconds

	$font = array(
		'size'=>17, // Font size, in pts usually.
		'angle'=>0, // Angle of the text
		'x-offset'=>12, // The larger the number the further the distance from the left hand side, 0 to align to the left.
		'y-offset'=>42, // The vertical alignment, trial and error between 20 and 60. FROM TOP
		'file'=>'bariol.otf', // Font path
		'color'=>imagecolorallocate($image, 255, 0, 0), // RGB Colour of the text
	);
	for($i = 0; $i <= 30; $i++){
		
		$interval = date_diff($future_date, $now);
		
		if($future_date < $now){
			/* This happens if the date has passed. */
			$image = imagecreatefrompng('images/doopla.png');
			
			$textDay = $interval->format('0%a');
			$textHour = $interval->format('%H');
			$textMin = $interval->format('%I');
			$textSec = $interval->format('%S');
			
			imagettftext ($image , $font['size'] , $font['angle'] , 17 , $font['y-offset'] , $font['color'] , $font['file'], $textDay );
			imagettftext ($image , $font['size'] , $font['angle'] , 85 , $font['y-offset'] , $font['color'] , $font['file'], $textHour );
			imagettftext ($image , $font['size'] , $font['angle'] , 140 , $font['y-offset'] , $font['color'] , $font['file'], $textMin );
			imagettftext ($image , $font['size'] , $font['angle'] , 200 , $font['y-offset'] , $font['color'] , $font['file'], $textSec );
			
			ob_start();
			imagegif($image);
			$frames[]=ob_get_contents();
			$delays[]=$delay;
			$loops = 1;
			ob_end_clean();
			break;
		} else {
			/* This is the countdown timer */
			$image = imagecreatefrompng('images/main_07.png');
			
			$textDay = $interval->format('0%a');
			$textHour = $interval->format('%H');
			$textMin = $interval->format('%I');
			$textSec = $interval->format('%S');
			
			imagettftext ($image , $font['size'] , $font['angle'] , 16 , $font['y-offset'] , $font['color'] , $font['file'], $textDay );
			imagettftext ($image , $font['size'] , $font['angle'] , 63 , $font['y-offset'] , $font['color'] , $font['file'], $textHour );
			imagettftext ($image , $font['size'] , $font['angle'] , 112 , $font['y-offset'] , $font['color'] , $font['file'], $textMin );
			imagettftext ($image , $font['size'] , $font['angle'] , 161 , $font['y-offset'] , $font['color'] , $font['file'], $textSec );
			
			ob_start();
			imagegif($image);
			$frames[]=ob_get_contents();
			$delays[]=$delay;
			$loops = 0;
			ob_end_clean();
		}

		$now->modify('+1 second');
	}

	//expire this image instantly
	header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );
	header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
	header( 'Cache-Control: no-store, no-cache, must-revalidate' );
	header( 'Cache-Control: post-check=0, pre-check=0', false );
	header( 'Pragma: no-cache' );
	$gif = new AnimatedGif($frames,$delays,$loops);
	$gif->display();