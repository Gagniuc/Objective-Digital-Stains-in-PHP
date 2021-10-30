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

function Sliding_Windw($sequence)
{

	$window = 30;
	$step = 1;

	for ($u=0; $u<=strlen($sequence) - $window; $u += $step)
  	{
		echo substr($sequence, $u, $window) . "<br>";
	}

}


function CG($sequence)
{
	$a = 0;
	$t = 0;
	$c = 0;
	$g = 0;

	for ($u=0; $u<=strlen($sequence); $u ++)
  	{
	
		$nucleotida = strtolower(substr($sequence, $u, 1));

		if ($nucleotida == "a") {$a = $a + 1;}
		if ($nucleotida == "t") {$t = $t + 1;}
		if ($nucleotida == "g") {$g = $g + 1;}
		if ($nucleotida == "c") {$c = $c + 1;}

	}

	return (100 / ($c + $g + $t + $a)) * ($c + $g);
}



function IC($sequence)
{
	$count = 0;
	$total = 0;
	$S1 = strtolower($sequence);
	$max = strlen($S1) - 1;

	for ($u=1; $u<=$max; $u++)
  	{

	$s2 = substr($S1, $u + 1, strlen($S1));

		for ($i=1; $i<=strlen($s2); $i++)
		{

			if (substr($S1, $i, 1) == substr($s2, $i, 1)) {
				$count = $count + 1;
			}

		} 


		if ($count <= 0) {
			$count = 0;
		} else {
			$total = $total + ($count / strlen($s2) * 100);
			$count = 0;
		}


	}

	return round(($total / $max), 2);
}

?>