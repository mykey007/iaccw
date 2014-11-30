<?php
	if ($fp = fopen('../tpl/events/eventsSummaryText.tpl','r')) { //			open for read only
		$fp = fopen('../tpl/events/eventsSummaryText.tpl','r+'); //				open for read and write, place file pointer at beginning
		fwrite($fp,$eventsSummary);
		fclose($fp);
		}
	else print "Couldn't open eventsSummaryText.tpl";
		include("eventsAdmin_buildNewEventsPage.php");
		header("Location:eventsAdmin.php");
?>

