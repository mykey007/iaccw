<?php
	require ("includes/clsPage.php"); 
	//include_once("underconstruction.php");

$output = new Webpage();
$title=" - Ospitalit&agrave; Italiana Project Highlights";
//$page_txt = constr();
$page_txt = '<table width="607" border="0" class="page_table page_table_Q">
														  <tr>
														    <td colspan="2"><br><div align=\'justify\' style=\'margin-right: 15px\'>The Italy-America Chamber of Commerce West has started the selection of Italian restaurants to participate in the <b>second edition of the <i>"Marchio Ospitalit&agrave; - Ristoranti Italiani nel Mondo"</i></b>.<br><br>
																The <i>"Marchio Ospitalit&agrave; Italiana"</i> is a seal of Authenticity given by the Italian Government to restaurants passing an extensive series of rigorous tests:  from the percentage of Italian wines on their list to the menu being written in perfect Italian, from one Italian speaking person to engage with customers to the quality of the extra virgin olive oil. The prerequisites are many - and demanding - but the results are more than worth it for both the restaurateurs and their clientele.<br>
																<a href=\'docs/Marchio_Ospitalita_Italiana.pdf\' target=\'_blank\'>Read More</a> <br><br><br>
																<b>HOW TO JOIN MARCHIO OSPITALIT&Agrave; ITALIANA -  II EDITION</b><br>
																If you are an Italian restaurant, or, if you know an Italian restaurant that can be interested in participating in the project, please call us at (310) 557-3017 or email at <a href="mailto:peretti@iaccw.net">peretti@iaccw.net</a>.<br><br>
<a href="docs/regolamento_rilascio_marchio.pdf" target="_blank">Read the "Regolamento di partecipazione"</a><br>
<a href="docs/disciplinare_ospitalita_italiana_mondo.pdf" target="_blank">Read the "Disciplinare Tecnico"</a><br><br>

<b>OSPITALIT&Agrave; ITALIANA INFORMATION DESK</b><br>
This section is dedicated to inform and educate consumers on the authenticity of typical Italian products and on the subject of counterfeited products. 
Informative materials are provided in Italian. For any further information or assistance, you can send an email to <a href="mailto:desk@iaccw.net">desk@iaccw.net</a><br>
<ul>
	<li><a href="docs/prodotti_DOP_IGP_UC.pdf" target="_blank">L\'Italia dei Prodotti DOP e IGP</a></li>
	<li><a href="http://www.onaf.it" target="_blank">ONAF (Organizzazione Nazionale Assaggiatori Formaggio)</a></li>
	<li><a href="http://ec.europa.eu/agriculture/" target="_blank">Agricoltura e Sviluppo Rurale</a></li>
	<li><a href="docs/Carta_Vini_DOC_DOCG_Enoteca_Italiana.pdf" target="_blank">Carta dei vini DOC e DOCG di Enoteca Italiana</a></li>
	<li><a href="docs/Denominazioni_VINI_post_Riforma.pdf" target="_blank">Denominazione vini post riforma</a></li>
</ul>

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