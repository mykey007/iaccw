<?php
	require ("includes/clsPage.php"); 
	//include_once("underconstruction.php");

/* EVERYTIME ADD SOMETHING NEW IN THIS PAGE, RUN /comic.php?value=1
   TO ACTIVATE THE COMIC INTO THE INDEX FOR 10 DAYS  -- REMEMBER !!!!!	*/


$output = new Webpage();
$title=" - News";

$page_txt = "
							<ul style='margin-right:5px;'>
								<li class='li_div'>
									<b>VIVA VINO L.A. 2012</b>
									Monday, May 14th through Saturday, May 19th, 2012<br>
									An exciting and comprehensive annual festival of Italian wine, VIVA VINO L.A.
									is produced by the Italy-America Chamber of Commerce West, the North
									American Sommelier Association (NASA) and Please The Palate. The second annual VIVA VINO L.A. is designed to promote the traditional varietals of
									Italy on the West Coast.<br> 
									<a href='#' onClick='more_span(1)' id='more_info_1'>Read More</a>
									<div id='more_1' style='display:none'>
										There are over 3,000 wine grape varietals that grow in Italy; VIVA VINO LA
										gives these native vines visibility and educates the trade and consumers
										about their style and terroir and provides the opportunity for the wineries
										that produce these wines to meet importers, buyers, retailers, press and
										consumers from throughout Los Angeles and Southern California, one of the
										largest wine markets in the United States.  VIVA VINO L.A. 2012 involves a
										carefully selected group of restaurants and retailers that represent the
										best of Italian culture in the Los Angeles area. They are intimately
										involved in the intensive week-long program dedicated to Italian native
										varietals. Dinners, lectures, tastings, seminars and extraordinary food
										events are held at these key establishments - both for the knowledgeable
										public and the trade. Numerous events will take place during VIVA VINO L.A.
										with the Grand Tasting, a full day event which welcomes the trade during the
										day and consumers in the evening, on Wednesday, May 16.<br> 
										For more information please call us at (310) 557-3017 or email at <a href='mailto:info@iaccw.net'>info@iaccw.net</a>.<br> 
										<a href='#' onClick='more_span(1)' id='readmore'>Close</a>
									</div>
								</li>
							</ul>
						";


$output -> DisplayTop($title);
$output->comic = 1;
$output -> DisplayCenter('news', 
													array('page_title'=>'IACCW News', 			 
												 'page_txt'=>$page_txt),'newspaper.jpg');
//$update="June, 23 2010";
$output -> DisplayBottom();
?>