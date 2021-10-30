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

include ("functions.php");

$sec = "CGGACTGATCTATCTAAAAAAAAAAAAAAAAAAAAAAAAAAACGTAGCATCTATCGATCTATCTAGCGATCTATCTACTACG";
echo "CG:" . CG($sec) . "<br>";
echo "IC:" . IC($sec) . "<br><br>";

?>

<img src="pattern.php?s=AGCATGCTATCTTCATACTACTACTAGCTATCTACTATCGTATCATCTATCTGTCTACTTACACTACTCACTCATACTCA">