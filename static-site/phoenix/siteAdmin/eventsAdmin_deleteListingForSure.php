<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	if ($deleteIt == "no") {
		$query = "DELETE FROM eventsToDelete WHERE id = '$idToDelete'";
		$result = mysql_query($query,$link);
		header("Location:eventsAdmin_deleteListing.php");
		break;
	}
	else {
		$query = "DELETE FROM Events WHERE id = '$idToDelete'";
		mysql_query($query, $link);
		$query = "DELETE FROM eventsToDelete WHERE id = '$idToDelete'";
		mysql_query($query, $link);
		$query = "SELECT * FROM eventsToDelete";
		$result = mysql_query($query, $link);
		$row = mysql_fetch_row($result);
		if ($row[0] == null) {
			header("Location:eventsAdmin_listings.php");
			break;
			}
		else header("Location:eventsAdmin_deleteListing.php");
		}
	mysql_close($link);
?>