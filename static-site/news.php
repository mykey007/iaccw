<?php
	require ("includes/clsPage.php"); 
	//include_once("underconstruction.php");

/* EVERYTIME ADD SOMETHING NEW IN THIS PAGE, RUN /comic.php?value=1
   TO ACTIVATE THE COMIC INTO THE INDEX FOR 10 DAYS  -- REMEMBER !!!!!	*/


$output = new Webpage();
$title=" - News";
//$page_txt = constr();
$page_txt = "
							<ul style='margin-right:5px;'>
								<li class='li_div'>
									<b>Job opportunities/Open positions at Pasta Mia.</b><br>
									<a href='/docs/Research_and_Development_Chef_Job_Description.pdf' target='_blank'>Research and Development Chef</a><br>
									<a href='/docs/Kitchen_Manager.pdf' target='_blank'>Kitchen Manager</a><br>
									For more information please contact <a href='mailto:esenatore@pastamia.com'>Enrico Senatore at Pasta Mia</a>
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