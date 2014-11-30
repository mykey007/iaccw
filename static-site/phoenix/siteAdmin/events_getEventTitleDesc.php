<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$connect = mysql_connect($hostpath,$user,$password); //change host name when transferred
	if (! $connect) die( "couldn't connect to MySQL");
	mysql_select_db($db) or die ("Couldn't open $db: ".mysql_error());
	if (($eventTitle = fopen("../tpl/events/eventsEventTitle.tpl",'w')) && ($eventDesc = fopen("../tpl/events/eventsEventDesc.tpl",'w'))) {
		$descID = $_GET['link'];
		$query = "SELECT * FROM Events";
		$result = mysql_query($query, $connect) or die(mysql_error('did not connect'));
		$event = mysql_fetch_row($result);
		echo 'event array is '.$event;
		print_r($event);
		$eventTitle = fopen("../tpl/events/eventsEventTitle.tpl",'w');
		fwrite($eventTitle,$event[3]);
		fwrite($eventDesc,$event[4]);
		fclose($eventTitle);
		fclose($eventDesc);
		}
		include("eventsAdmin_buildNewEventsPage.php");
		header("Location:../events.html");
?>