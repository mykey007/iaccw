<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Partners";

/*
 * 													  MAYBE TO REUSE
 * 														<tr>
															<td align=\'center\' width=\'130px\'>
														  <img src=\'/images/sviluppumbria.jpg\' border=\'0\' width=\'95px\'>
														  </td>
														  <td>
															  <b>SVILUPPUMBRIA</b><br>
															  <a href="http://www.sviluppumbria.it" target="_blank">www.sviluppumbria.it</a><br><br>
													  	</td>
													  </tr>
													  
													  <tr>
															<td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/cc_pescara.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
																<b>CCIAA PESCARA</b><br>
																<a href="http://www.pe.camcom.it" target="_blank">www.pe.camcom.it</a><br><br>
															</td>
														</tr>
 * 
 * */
 

$output -> DisplayTop($title, 7);
$output -> DisplayCenter('partners', 
													array('page_title'=>'Partners', 			 
												 'page_txt'=>'<div style=\'margin-right: 15px;text-align:justify\'>The Italy-America Chamber of Commerce West represents a number of Italian institutions,
												  local agencies and trade associations.<br><br>These organizations offer a wide range of very specific services geared to promote
												   internationalization and further economic and cultural ties between the United States and Italy.<br><br>  
												  The following organizations are engaged in partnerships with the IACCW:<br><br>
												  <ul>
												  <table border=\'0\' class=\'page_table\'>
													  <tr>
														  <td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/fiera_milano.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
														  <b>FIERA MILANO SPA</b><br>
														  <a href="http://www.fieramilano.it" target="_blank">www.fieramilano.it</a><br><br>
														  </td>
													  </tr>
													  <tr>
													  	<td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/regione_veneto.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
															  <b>VENETO PROMOZIONE</b><br>
															  <a href="http://www.centroesteroveneto.com" target="_blank">www.centroesteroveneto.com</a><br><br>
															</td>
														</tr>
													  <tr>
													  	<td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/cc_perugia.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
															  <b>CCIAA PERUGIA</b><br>
																<a href="http://www.pg.camcom.it" target="_blank">www.pg.camcom.it</a><br><br>
															</td>
														</tr>
														<tr>
															<td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/puglia.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
																<b>REGIONE PUGLIA</b><br>
																<a href="http://www.regione.puglia.it" target="_blank">www.regione.puglia.it</a><br><br>
															</td>
														</tr>
														
														<tr>
															<td align=\'center\' width=\'130px\'>
														  <img src=\'/gallery/cciaa_pisa.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td>
																<b>CCIAA PISA</b><br>
																<a href="http://www.pi.camcom.it/" target="_blank">http://www.pi.camcom.it/</a><br><br>
															</td>
														</tr>
														
														<tr>
															<td align=\'center\' width=\'130px\' height=\'80px\' valign=\'top\' style=\'padding-top:10px\'>
														  <img src=\'/images/cciaa_vic.gif\' border=\'0\' width=\'100px\'>
														  </td>
														  <td valign=\'top\' style=\'padding-top:10px\'>
																<b>CCIAA VICENZA</b><br>
																<a href="http://www.vi.camcom.it/" target="_blank">http://www.vi.camcom.it/</a><br><br>
															</td>
														</tr>
														
														<tr>
															<td align=\'center\' width=\'130px\' height=\'60px\' valign=\'top\'>
														  <img src=\'/images/cciaa_parma.jpg\' border=\'0\' width=\'100px\'>
														  </td>
														  <td valign=\'top\'>
																<b>CCIAA PARMA</b><br>
																<a href="http://www.pr.camcom.it/" target="_blank">http://www.pr.camcom.it/</a><br><br>
															</td>
														</tr>
												  </table>
													</div>
												  ',
												 'page_txt_left'=>''							
												 ),'partners.jpg');
$update="August, 11 2011";
$output -> DisplayBottom();
?>