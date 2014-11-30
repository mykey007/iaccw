<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Ospitalit&agrave; Italiana News & Press";
//$page_txt = constr();
$page_txt = '<ul style="margin:20px 5px 0 0;">
									<li>
										<b>The "Marchio Ospitalit&agrave; Italiana" at TASTE OF ITALY goes on TV!</b><br> 
										<a href="http://www.youtube.com/iamofla" target="_blank">Watch KTLA News Report</a><br>
										<br/></li><br> 
										
									<li>
										<b>Los Angeles Event - 34 Italian Restaurants in Los Angeles and San Francisco received the Ospitalit&agrave; Italiana Quality Seal from the Italian Goverment</b><br>
										The award ceremony of the "Marchio Ospitalit&agrave; Italiana - Italian Restaurants in the World" took place at the Italian Cultural Institute on May 4th.<br>
										31 restaurants in Los Angeles 
										and 3 in San Francisco participated in the event, receiving the well deserved plate with the Q, symbol of the Italian Quality and the respect of the very high standards of Italian hospitality.<br>
										<a href="/docs/E_Italia.pdf" target="_blank">Read the article</a><br>
										<a href="/docs/GENERAL_PRESS_RELEASE.pdf" target="_blank">Awarding Ceremony Press Release</a><br>
										<a href="/docs/ConferenzaStampaFINALE.pdf" target="_blank">Marchio Ospitalit&agrave; Italiana Presentation</a><br>
										<br/></li><br>
										
									<li>
										<b>Press articles on the "Marchio Qualit&agrave; Italiana" awarding ceremony</b><br>
										<p class="extrali">Italian Quality Served on a Golden Plate. 34 restaurants in California received the "Marchio Ospitalit&agrave; Italiana" - 
										(<a href="http://www.italplanet.it/interna.asp?sez=688&info=21055" target="_blank">e\'ITALIA</a>)<br>
										</p>
										
										<p class="extrali">Lago, Valentino are true Italians - 
										(<a href="http://www.smdp.com/Articles-c-2011-05-13-71809.113116-Lago-Valentino-are-true-Italian.html" target="_blank">Santa Monica Daily Press</a>)<br>
										</p>
										
										<p class="extrali">Consegnate le prime targhe d\'oro in California con marchio di autenticit&agrave; "Q". Trentaquattro i ristoranti certificati durante l\'evento all\'IIC - 
										(<a href="http://www.italoamericano.com/los_angeles_news/consegnate_le_prime_targhe.htm" target="_blank">L\'Italo-Americano</a>)<br>
										</p>
										
										<p class="extrali">The "Q" seal, now that\'s amore - 
										(<a href="http://www.culvercitynews.org/dining/the-q-seal-now-that-s-amore/" target="_blank">Culver City News</a>)<br>
										</p>
										
										<p class="extrali">Eight Italian Restaurants In Beverly Hills Presented With "Q" Seals - 
										(<a href="http://www.bhcourier.com/article/Business/Business/Eight_Italian_Restaurants_In_Beverly_Hills_Presented_With_Q_Seals/76119" target="_blank">Beverly Hills Courier</a>)<br>
										</p>
										
										<p class="extrali">Q is for Quality - 
										(<a href="/docs/QObserverNewspaper.pdf" target="_blank">Observer Newspaper</a>)<br>
										</p>
										
										<p class="extrali">Restaurants receive culinary award - 
										(<a href="/docs/QTheArgonaut.pdf" target="_blank">The Argonaut</a>)<br>
										</p>
										<br/></li><br>	
										
										<li>
										<b><a href="http://www.fusarophotography.com/blog/2011/05/the-coveted-q/" target="_blank">AWARDING CEREMONY PICTURES SLIDE SHOW</a></b>
										<br/></li><br>
							</ul>	'; 

$output -> DisplayTop($title);
$output -> DisplayCenter('about', 
           array('page_title'=>'News & Press', 
           			 'page_txt'=>$page_txt,
           			 'extra_page_table_class'=>'page_table_Q_press',
            		 'menu_voice'=>array(array('url'=>'/Q_highlights.php', 'menu_name'=>'Project Highlights', 'high'=>0), 
            		 										 array('url'=>'/Q_mediagallery.php', 'menu_name'=>'Media Gallery', 'high'=>0), 
            		 										 array('url'=>'/Q_newspress.php', 'menu_name'=>'News & Press', 'high'=>1),
            		 										 array('url'=>'/Q_restaurantlist.php', 'menu_name'=>'Participating Restaurants', 'high'=>0))),'ospitalita.jpg');
//$update="January, 03 2008";
$output -> DisplayBottom();
?>