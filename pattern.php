<?php

//  ________________________________                          ____________________________
// /  PromKappa                     \________________________/       v2.00                |
// |                                                                                      |
// |                   Name:  PromKappa (ported from VB6 to PHP)                          |
// |     Original language :  Visual Basic 6                                              |
// |    Original source V1 :  http://www.biomedcentral.com/1471-2164/13/512/additional    |
// |    Original source V2 :  http://www.biomedcentral.com/1471-2164/14/278/additional    |
// |               Category:  Open source software                                        |
// |                 Author:  Paul A. Gagniuc                                             |
// |                  Email:  paul_gagniuc@acad.ro                                        |
// |                                                                                      |
// |           Date Created:  October 2013                                                |
// |               Language:  PHP                                                         |
// |                    Use:  DNA patterns, analysis of DNA sequences                     |
// |                                                                                      |
// |                  _____________________________                                       |
// |_________________/                             \______________________________________|
//

$sequence = $_GET["s"];

include ("functions.php");

	$width = 255;
	$height = 255;
	$image = imagecreatetruecolor($width, $height);

	$window = 30;
	$step = 1;


	$no_points = strlen($sequence) - $window;

	for ($u=0; $u<=$no_points; $u += $step)
  	{
		$window_string = substr($sequence, $u, $window);

		$CGP = CG($window_string);
		$KIC = IC($window_string);

		$X_CG = round(($width/100) * $CGP);
		$Y_IC = round(($height/100) * $KIC);
		

		$line_with = round($width/$no_points);

		$x1 =$X_CG;
		$y1 =$height - $Y_IC;

		$x2 =$X_CG + $line_with;
		$y2 =$height - $Y_IC;

		$color = imagecolorallocate($image, 255, 0, 0); ;

		imageline($image, $x1, $y1, $x2, $y2, $color);
	}

	header("Content-type: image/png");
	imagepng($image);
	imagedestroy($image);
?>