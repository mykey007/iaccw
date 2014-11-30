<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Events";

$output -> DisplayTop($title, 4);
$page_txt = "
The Chamber organizes networking events and functions in order to bring members together and assist them in maximizing the opportunity to establish useful contacts. To best take advantage of your membership, we encourage you to participate in the Chambers’ events and activities.<br><br>
The range of events includes business mixers, dinners, seminars and much more!<br><br>
Event sponsorships and promotional opportunities are available.<br>
Please contact the Chamber at <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>.<br>
To propose an event to be organized by the Chamber, contact <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>.<br><br>

<ul>
	<li class='li_div'>
		<b>VIVA VINO L.A. 2012</b><br>
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

$output -> DisplayCenter('events', 
													array('page_title'=>'Events', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/events.php', 'menu_name'=>'IACCW Events', 'high'=>1), 
												               array('url'=>'/other_events.php', 'menu_name'=>'Other Events', 'high'=>0))),'events.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>