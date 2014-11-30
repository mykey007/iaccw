<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Opportunities";

$page_txt = "
						<div align='justify' style='width: 580px'>
												 	
												 		<p><b>Trade shows and exhibitions</b><br>
												 		
														The Chamber organizes official delegations to the most important Italian Trade Shows and Exhibitions. Information and assistance 
														is also provided to Italian companies interested in participating in US Trade Shows.</p>
														
														<ul> <!-- tradeshowsITA.php -->
															<li style='line-height:25px'><a href='http://athos.mi.camcom.it/fiere/eng/ricerca.phtml' target='_blank'>Trade Shows in Italy</a></li>
															<li style='line-height:25px'><a href='/tradeshowsUS.php'>Trade Shows in the US</a></li>
															<li style='line-height:25px'><a href='#' onClick='fiera();return false;'>Fiera Milano</a></li>
														</ul>
														
														<div id='fiera' style='display: none;'>
															  <p style='margin-left: 25px'>
															  <b>FIERA MILANO</b><br>
																The Italy-America Chamber of Commerce West is Fiera Milano's representative office in the West coast of the US. 
																Fiera Milano is the leading trade fair organizer in Italy and one of the largest in the world.<br><br>
																
																For more information please contact <b>Raffaele Rinaldi</b>, Fiera Milano Representative at (310) 557-3017.<br><br>
		
																<a href='http://www.fieramilano.it/portal/page?_pageid=36,38540&_dad=portal&_schema=PORTAL' target='_blank'>Calendar of Fiera Milano</a><br>
																<a href='http://www.fieramilano.it' target='_blank'>http://www.fieramilano.it</a>
														</p>
														</div>
														
														<p style='margin-top:60px;font-size: 10px;font-weight: bold'>Some of the information contained in this website is provided by sources other than the IACCW.<br>As such, the IACCW cannot be responsible for the accuracy of any externally linked pages</p>
							</div>


";

$output -> DisplayTop($title, 5);
$output -> DisplayCenter('opportunities', 
													array('page_title'=>'Trade Shows', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/trade.php', 'menu_name'=>'Trade Activities', 'high'=>0), 
												               array('url'=>'/opportunities.php', 'menu_name'=>'Trade Shows', 'high'=>1))),'trade_activities.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>