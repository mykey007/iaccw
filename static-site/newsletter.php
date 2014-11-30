<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Newsletter";

//$page_txt = constr();

$output -> DisplayTop($title, 6);

$page_txt = "
			<div style='margin-left: 30px; margin-bottom: 10px;' class=page_table'>
				<a title='IACCW Newsletter - June 2012' href='docs/NewsletterJune2012.pdf' target='_blank'>IACCW Newsletter - June 2012</a>
			</div>
			<div style='margin-left: 30px; margin-bottom: 10px;' class=page_table'>
				<a href='/docs/VIVA+VINO+Newsletter.pdf' target='_blank' title='VIVA VINO L.A. 2011 Newsletter'>VIVA VINO L.A. 2011 Newsletter</a>
			</div>";

$output -> DisplayCenter('newsletter', 
													array('page_title'=>'Newsletters', 			 
												 'page_txt'=>$page_txt),'newsletter.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>