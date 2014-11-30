<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	if ($edit[0] != null) {
		foreach($edit as $key => $field) {
			if ($edit[$key] == $delete[$key]) { //see if more than one checkbox was checked
				header("Location:redirectListings.html");
				break;
				}
			}
		}
	if ($edit[0] != null) {
		foreach($edit as $field) {
			$query = "SELECT id,beginDate,endDate,title,description FROM Events WHERE id='$field'";
			if (!mysql_query($query, $link)) {
				$dberror = mysql_error();
				print $dberror;
				print "there is an error in Select";
				return false;
				}
			$result = mysql_query($query, $link);
			$insertRow = mysql_fetch_row($result);
			$query = "INSERT INTO eventsToEdit (id,beginDate,endDate,title,description) VALUES ('$insertRow[0]','$insertRow[1]','$insertRow[2]','$insertRow[3]','$insertRow[4]')";
			if (!mysql_query($query, $link)) {
				$dberror = mysql_error();
				print $dberror;
				print "there is an error in Insert";
				return false;
				}
			}
		}
	if ($delete[0] != null) {
		foreach($delete as $field) {
			$query = "SELECT id,beginDate,endDate,title,description FROM Events WHERE id='$field'";
			if (!mysql_query($query, $link)) {
				$dberror = mysql_error();
				print $dberror;
				print "there is an error in Select2";
				return false;
				}
			$result = mysql_query($query, $link);
			$insertRow = mysql_fetch_row($result);
			$query = "INSERT INTO eventsToDelete (id,beginDate,endDate,title,description) VALUES ('$insertRow[0]','$insertRow[1]','$insertRow[2]','$insertRow[3]','$insertRow[4]')";
			if (!mysql_query($query, $link)) {
				$dberror = mysql_error();
				print $dberror;
				print "there is an error in insert eventsToDelete";
				return false;
				}
			}
		}
	header("Location:eventsAdmin_editListing.php");
	mysql_close($link);
?>