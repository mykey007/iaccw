<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	$convertedBeginDate = $beginYear."-".$beginMonth."-".$beginDate;
	$convertedEndDate = $endYear."-".$endMonth."-".$endDate;
	$thisYear = intval(date("Y"));
	$thisMonth = intval(date("m"));
	$thisDate = intval(date("j"));
	if ($changedMind == "doNotEdit") {
		$query = "DELETE FROM eventsToEdit WHERE id=$idToEdit";
		$result = mysql_query($query, $link);
		header("Location:eventsAdmin_editListing.php");
		break;
	}
//	print "\$beginYear ".$beginYear." \$thisYear".$thisYear."<br/>";
//	print "\$beginMonth ".$beginMonth." \$thisMonth".$thisMonth."<br/>";
//	print "\$beginDate ".$beginDate." \$thisDate".$thisDate."<br/>";
	if ((($beginYear == $thisYear) && ($beginMonth > $thisMonth)) || //		if this year is selected and the begin month is later than this month
	    (($beginYear == $thisYear) && ($beginMonth == $thisMonth) && ($beginDate >= $thisDate)) || // or if this year selected and this month selected and the date selected is later than today
	     ($beginYear > $thisYear)) //											or if the year is later than this year
	    	{ //																if it passes all these tests, then the dates are valid, go ahead and insert them in the Events table
				$query = "UPDATE Events SET beginDate = '$convertedBeginDate', endDate = '$convertedEndDate' WHERE id=$idToEdit";
				mysql_query($query,$link) or die ("couldn't add data to \"Events\" table: ".mysql_error());
			}
	else {$flag = "redirect";}
	/* this function splits the string into an array in case PHP5 is not in use */
	
	if (!function_exists('str_split')) {
		function str_split($string, $split_length = 1) {
			if ($split_length < 1) {
				return false;
				}
			for ($pos = 0, $descriptionArray = array(); $pos < strlen($string); $pos += $split_length) {
				$descriptionArray[$pos] = substr($string, $pos, $split_length);
				}
			return $descriptionArray;
		}
	}

	if ($title != "") {
		$sql = "UPDATE Events SET title = '$title' WHERE id=$idToEdit";
		$result = mysql_query($sql);
	}
	if ($description != "") {
		$sql = "UPDATE Events SET description = '$description' WHERE id=$idToEdit";
		$result = mysql_query($sql);
		if (strlen($description) <= 64)
			$summary = $description;
		else {
			$descriptionArray = str_split($description);
			for ($x = 0; $x <= 64;$x++)
				$summary .= $descriptionArray[$x];
			$stringLength = strlen($description);
			$stopAddingCharacters = 0;
			for ($x = 64; $x <= $stringLength; ++$x)
				if (($descriptionArray[$x] != " ") && ($stopAddingCharacters = 0))
					$summary .= $descriptionArray[$x];
				else
					$stopAddingCharacters = 1;
			$summary .= "...";
		}
		$sql = "UPDATE Events SET summary = '$summary' WHERE id=$idToEdit";
		$result = mysql_query($sql);
	}
	if ($flag == "redirect") header("Location:redirectEditListing.html");
	else {
		$sql = "DELETE FROM eventsToEdit WHERE id=$idToEdit";
		$result = mysql_query($sql);
		header("Location:eventsAdmin_editListing.php");
		}
	mysql_close($link);
?>