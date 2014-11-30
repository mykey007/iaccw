<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Ospitalit&agrave; Italiana List of Restaurants";
$page_txt = constr();

$output -> DisplayTop($title);
$output -> DisplayCenter('about', 
           array('page_title'=>'List of Participating Restaurants', 
           			 'page_txt'=>$page_txt,
           			 
           			 /*'<table width="607" border="0" class="page_table">
														  <!--<tr>
														    <td align=\'left\' width=\'75%\'><b>President:</b><br>Philip Bartenetti</td>
														    <td width=\'25%\'><b>Executive Director:</b><br>Letizia Miccoli</td>
														  </tr>-->
														  <tr>
														    <td colspan="2"><br><div align=\'justify\' style=\'margin-right: 15px\'>Founded in 1987, the Italy America Chamber of Commerce West (IACCW) is a private, non-profit organization whose mission 
														    is to promote and stimulate economic and trade relations between Italy and the Western United States.<br><br>
																Our goal is to provide our members with a broad range of services, emphasizing commercial assistance and referrals, in support of their 
																business activities and expansion goals.<br><br>
																In addition, we organize on-going events including conferences, seminars and lunch meetings, attended by high-profile 
																individuals from the entrepreneurial, governmental, political, diplomatic and cultural sectors, designed to open new levels of cooperation and dialogue.<br><br>

																The IACCW works in close collaboration with a number of key organizations involved in the promotion of overseas commerce, in particular the <a href=\'http://www.commerce.gov\' target=\'_blank\'>U.S. Department of 
																Commerce</a>, local Chambers of Commerce both in Italy and the U.S., and influential trade associations representing diverse worldwide industries.<br><br>
																The IACCW is a member of <a href=\'http://www.assocamerestero.it\' target=\'_blank\'>Assocamerestero</a> (the Association of Italian Chambers of Commerce Abroad) and is affiliated with EABA (European American Business Association). We are also the Western U.S. representative of <a href=\'http://www.fieramilano.it\' target=\'_blank\'>Fiera Milano</a>, 
																one of the foremost exhibition and trade show centers in Europe.<br><br>  
																On behalf of our members, we assemble a comprehensive roster of elements, working in concert to address their needs: expert professional staff, 
																in-depth services, and hands-on support. This enables them to take maximum advantage of the business opportunities existing between Italy and the United States. 
																</div></td>
														  </tr>
														</table>',	*/
           
            		 'menu_voice'=>array(array('url'=>'/Q_highlights.php', 'menu_name'=>'Project Highlights', 'high'=>0), 
            		 										 array('url'=>'/Q_mediagallery.php', 'menu_name'=>'Media Gallery', 'high'=>0), 
            		 										 array('url'=>'/Q_newspress.php', 'menu_name'=>'News & Press', 'high'=>0),
            		 										 array('url'=>'/Q_restaurantlist.php', 'menu_name'=>'List of Participating Restaurants', 'high'=>1))),'about_us.jpg');
$update="January, 03 2008";
$output -> DisplayBottom($update);
?>