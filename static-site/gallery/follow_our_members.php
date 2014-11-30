<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Follow Our Members";

$page_txt = "
							<ul style='margin-right:5px;text-align:justify'>
									<li>
										<b>SOILS AND WINE SEMINAR<br>
										February 28th, from 10:30am to 2:30pm, Benchmark Architectural Showroom</b><br>
										The North American Sommelier Association, in collaboration with the Italy-America Chamber of Commerce West, organizes a seminar dedicated to the differences in soil composition and the influence on the wines produced there.<br>
										The seminar will offer an in-depth study that combines geology and wine tasting led by NASA Sommelier and Geologist Osvaldo Pascolini.<br>
										Special thanks to our member <b>Benchmark Architectural Showroom</b> for hosting the seminar.<br>
										February 28th, from 10:30am to 2:30pm at Benchmark Architectural Showroom, 5715 Mesmer Ave - Culver City, CA 90230 - Price: $ 80.<br>
										For more information and reservation please visit <a href='http://www.nasommelier.com' target='_blank'>www.nasommelier.com</a>
									</li><br>
							</ul>
						";

//$page_txt = constr(); 

$output -> DisplayTop($title);
$output -> DisplayCenter('follow_members', 
													array('page_title'=>'Follow Our Members', 			 
												 'page_txt'=>$page_txt,
												 'page_txt_left'=>''							
												 ),'footsteps.jpg');
$update="August, 11 2011";
$output -> DisplayBottom();
?>