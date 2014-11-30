<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Links";

$output -> DisplayTop($title, 8);
$output -> DisplayCenter('links', 
													array('page_title'=>'Links', 			 
												 'page_txt'=>'
												 <div style="width: 585px; text-align: justify">
												 		<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.ambwashingtondc.esteri.it/ambasciata_washington" target="_blank">Embassy of Italy in Washington</a></b></div>
														For more informations:<br>  
														Phone: +1 (202) 612-4400 - Fax: +1 (202) 518-2154<br> 			
												 
												 		<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.conslosangeles.esteri.it" target="_blank">Consulate General of Italy</a></b></div>
														The Consulate General of Italy offers services and promotes Italy in different sectors, across Southern California, Nevada, Arizona and New Mexico.<br> 
														For more information:<br>  
														Phone: +1 (310) 820-0622 - e-mail: <a href=\'mailto:consolato.losangeles@esteri.it\'>consolato.losangeles@esteri.it</a><br> 
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.iiclosangeles.esteri.it" target="_blank">Italian Cultural Institute</a></b></div>
														The Italian Cultural Institute (IIC) is the Cultural Office of the Italian Consulate General in Los Angeles. 
														The Italian Cultural Institute is an organization aimed at strengthening the cultural links between the United States 
														and Italy by organizing arts exhibitions, promoting Italian events dealing with Italian music, dance, cinema, theater, 
														architecture, literature, cuisine, etc.
														<br>For more information:<br>
														Phone: +1 (310) 443-3250 - e-mail: <a href=\'mailto:iicla@esteri.it\'>iicla@esteri.it</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.italiantourism.com" target="_blank">Italian Government Tourist Board</a></b></div>
														The Italian Government Tourist Board provides tourist and travel information for Italy. <br> 
														For more information:<br>
														Phone: +1 (310) 820-1898 - e-mail: <a href=\'mailto:enitla@italiantourism.com\'>enitla@italiantourism.com</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.italtrade.com" target="_blank">Italian Trade Commission</a></b></div>
														The Italian Institute for Foreign Trade (I.C.E) is the public agency entrusted with promoting trade, business opportunities
														and industrial co-operation between Italian and foreign companies, mostly by organizing the participation of Italian firms
														in fairs, exhibitions, workshops. <br> 
														For more information:<br>
														Phone: +1 (323) 879-0950 - e-mail: <a href=\'mailto:losangeles@losangeles.ice.it\'>losangeles@losangeles.ice.it</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.assocamerestero.it" target="_blank">Assocamerestero</a></b></div>
														Assocamerestero is the association of the Italian Chambers of Commerce worldwide, created for the use and development of the 
														activities of the Chambers by spreading awareness and interest regarding the network and its special features among Italian 
														and International institutions and entrepreneurial organizations.<br> 
														For more information:<br>
														Phone: +39 06 44231314 e-mail: <a href=\'mailto:info@assocamerestero.it\'>info@assocamerestero.it</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.unioncamere.it" target="_blank">Unioncamere</a></b></div>
														Unioncamere represents the general interests of the Chambers of Commerce.
														Unioncamere works directly with both national and international institutions to realize collaborative initiatives 
														that greatly help to support the Chambers.<br> 
														For more information:<br>
														Phone: +39 06 47041<br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.fieramilano.it" target="_blank">Fiera Milano</a></b></div>
														Fiera Milano is a group of companies that not only manages fitted spaces of one of the biggest exhibition centers in the world, 
														but even organizes shows and congresses and provides the full range of fair-related services for companies. <br> 
														For more information:<br>
														Phone: +39 02 49971 - e-mail: <a href=\'mailto:fieramilano@fieramilano.it\'>fieramilano@fieramilano.it</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.fondazione-italia.org" target="_blank">Fondazione Italia</a></b></div>
														Fondazione Italia promotes Italian culture and language instruction. 
														Fondazione Italia is a California non-profit corporation, governed by a volunteer board of community leaders.<br> 
														For more information:<br>
														Phone: +1 (310) 739-9350  - e-mail: <a href=\'mailto:info@fondazione-italia.org\'>info@fondazione-italia.org</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.comitesla.org " target="_blank">COM.IT.ES.</a></b></div>
														Comites are elective organisms which represent the needs of Italians citizens resident in foreign Countries. 
														The Comites in L.A. works in relationship with the Embassy and its Consolar Offices to identify the social, cultural 
														and civil necessities of the Italian Community. <br> 
														For more information:<br>
														Phone: +1 (310) 697-8907   - e-mail: <a href=\'mailto:comites@comitesla.net\'>comites@comitesla.net</a><br>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.sviluppoeconomico.gov.it" target="_blank">Ministero dello Sviluppo Economico</a></b></div>
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.ilsole24ore.com" target="_blank">Il Sole 24 Ore</a></b></div>
														The Italian national daily business newspaper. Il Sole 24 Ore reports on business, politics, developments in commercial and labour law, corporate news and features.<br> 
														
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.corriere.it" target="_blank">Il Corriere della Sera</a></b></div>
														The  Italian daily newspaper published in Milan.<br> 
			
														<p><div id="link_div" width="100%">&nbsp;<b><a href="http://www.repubblica.it" target="_blank">La Repubblica</a></b></div>
														The second largest circulation Italian daily general-interest newspaper.<br>
												 	
												 </div>
												  ',
												 'page_txt_left'=>''							
												 ),'links.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>