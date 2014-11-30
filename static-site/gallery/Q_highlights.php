<?php
	require ("includes/clsPage.php"); 
	//include_once("underconstruction.php");

$output = new Webpage();
$title=" - Ospitalit&agrave; Italiana Project Highlights";
//$page_txt = constr();
$page_txt = '<table width="607" border="0" class="page_table page_table_Q">
														  <tr>
														    <td colspan="2"><br><div align=\'justify\' style=\'margin-right: 15px\'>"Marchio Ospitalit&agrave; Italiana" is a quality seal that was launched in Italy in 1997 to promote the quality of Italian Touristic enterprises and to guarantee consumers of the quality of the services delivered.<br><br>
																Conceived by UNIONCAMERE (Association of the Chambers of Commerce in Italy) in collaboration with FIPE - Federazione Italiana Pubblici Esercizi and supported by ISNART - Istituto Nazionale Ricerche Turistiche, Ospitalit&agrave; Italiana engages about 5,000 among hotels, restaurants and holiday farms located in 18 Italian regions.<br><br>
																On the basis of the success obtained in Italy, UNIONCAMERE has extended the project overseas involving the 75 Italian Chambers of Commerce Abroad. The Italy-America Chamber of Commerce West - IACCW is extending the invitation to Italian Restaurants in the Western United States to become part of this important project.<br>
																<a href=\'docs/info_web.pdf\' target=\'_blank\'>Read More</a> <br><br><br>
																<b>HOW TO JOIN OSPITALIT&Agrave ITALIANA</b><br>
																All Italian Restaurants interested in joining the project "Marchio Ospitalit&agrave; Italiana - Italian Restaurants in the World" are kindly requested to contact the IACCW for any further information (Lucia Peretti, Tel. 310-557-3017 or email <a href="mailto:peretti@iaccw.net">peretti@iaccw.net</a>).  
																</div></td>
														  </tr>
														</table>';

$output -> DisplayTop($title);
$output -> DisplayCenter('Q_highlights', 
           array('page_title'=>'Project Highlights', 
           			 'page_txt'=>$page_txt,
           			 'extra_page_table_class'=>'page_table_Q', 	
            		 'menu_voice'=>array(array('url'=>'/Q_highlights.php', 'menu_name'=>'Project Highlights', 'high'=>1), 
            		 										 array('url'=>'/Q_mediagallery.php', 'menu_name'=>'Media Gallery', 'high'=>0), 
            		 										 array('url'=>'/Q_newspress.php', 'menu_name'=>'News & Press', 'high'=>0),
            		 										 array('url'=>'/Q_restaurantlist.php', 'menu_name'=>'Participating Restaurants', 'high'=>0))),'ospitalita.jpg');
//$update="January, 03 2008";
$output -> DisplayBottom();
?>