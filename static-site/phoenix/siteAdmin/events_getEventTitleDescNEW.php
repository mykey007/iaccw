<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$connect = mysql_connect($hostpath,$user,$password); //change host name when transferred
	if (! $connect) die( "couldn't connect to MySQL");
	mysql_select_db($db) or die ("Couldn't open $db: ".mysql_error());
	if (($eventTitle = fopen("../tpl/events/eventsEventTitle.tpl",'w')) && ($eventDesc = fopen("../tpl/events/eventsEventDesc.tpl",'w'))) {
		$descID = 39;
		$query = "SELECT * FROM Events WHERE id=39";
		$result = mysql_query($query, $connect);
		$event = mysql_fetch_row($result);
		$eventTitle = fopen("../tpl/events/eventsEventTitle.tpl",'w');
		$eventDesc = fopen("../tpl/events/eventsEventDesc.tpl", 'w');
		fwrite($eventTitle,$event[2]);
		fwrite($eventDesc,$event[3]);
		fclose($eventTitle);
		fclose($eventDesc);
		}
		//include("eventsAdmin_buildNewEventsPage.php");
		//header("Location:../events.html");
?>