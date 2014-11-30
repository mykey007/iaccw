<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - About Us";
//$page_txt = constr();

$page_txt = '<table width="607" border="0" class="page_table">
														  <tr>
														    <td align=\'left\' width=\'75%\'><b>President:</b><br>Agostino Magni</td>
														    <td width=\'25%\'><b>Executive Director:</b><br>Letizia Miccoli</td>
														  </tr>
														  <tr>
														    <td colspan="2"><br>
														    	<div align=\'justify\' style=\'margin-right: 15px\'>
																    Founded in 1987, the Italy America Chamber of Commerce West (IACCW) is a private, non-profit organization whose mission is to promote and stimulate economic and trade relations between Italy and the Western United States.<br><br>

																	The goal of the IACCW is to provide our members with a broad range of services, emphasizing commercial assistance and referrals, in support of their business activities and expansion goals.<br><br>

																	The IACCW works in close collaboration with a number of local trade organizations involved in the promotion of overseas commerce, and influential associations representing different worldwide industries.<br><br>

																	The IACCW is one of five Italian-American Chambers of Commerce. It also belongs to <a href=\'http://www.assocamerestero.it\' target=\'_blank\'>Assocamerestero</a> (the Association of Italian Chambers of Commerce Abroad) representing a network of 75 Italian Chambers of Commerce in 49 countries.<br><br> 

																	In 2005 the IACCW extended its services to Arizona by opening its <u>Phoenix Chapter</u>. The goal of the Chapter is to create a bridge between Arizona and Italy, thus opening up an exchange of products and services which benefit both economies.<br><br>
																	
																	<span class="fb_link">
																		<a href="http://www.facebook.com/pages/Italy-America-Chamber-of-Commerce-West-Los-Angeles/102567339835771" target="_blank" title="Visit our Page on Facebook">
																			Follow us on Facebook
																		</a>
																	</span>
																</div>
															</td>
														  </tr>
														</table>';

$output -> DisplayTop($title, 1);
$output -> DisplayCenter('about', 
           array('page_title'=>'About Us', 
           			 'page_txt'=>$page_txt,
           			 'menu_voice'=>array(array('url'=>'/about_us.php', 'menu_name'=>'About Us', 'high'=>1), 
            		 										 array('url'=>'/board.php', 'menu_name'=>'Board Members', 'high'=>0), 
            		 										 array('url'=>'/staff.php', 'menu_name'=>'Staff', 'high'=>0),
            		 										 array('url'=>'phoenix/index.html', 'menu_name'=>'Phoenix Chapter', 'target'=>'_blank'))),'about_us.jpg');
//$update="January, 03 2008";
$output -> DisplayBottom();
?>