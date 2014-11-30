<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	$convertedBeginDate = $beginYear."-".$beginMonth."-".$beginDate;
	if ($endDate == null || $endMonth == null || $endYear == null) //			if any of the fields is set to null, database's end date will be null
		$convertedEndDate = null;
	else $convertedEndDate = $endYear."-".$endMonth."-".$endDate;
	$thisYear = intval(date("Y"));
	$thisMonth = intval(date("m"));
	$thisDate = intval(date("j"));
	if (($title == null) || ($description == null)) {
		header("Location:redirectAddListing.html");
		break;
		}
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
	if (strlen($description) <= 64)
		$summary = $description;
	else {
		$descriptionArray = str_split($description);
		for ($x = 0; $x <= 64;$x++) {
				$summary .= $descriptionArray[$x];
				}
		$stringLength = strlen($description);
		$stopAddingCharacters = 0;
		for ($x = 64; $x <= $stringLength; ++$x)
			if (($descriptionArray[$x] != " ") && ($stopAddingCharacters = 0))
				$summary .= $descriptionArray[$x];
			else
				$stopAddingCharacters = 1;
		$summary .= "...";
		}
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());	//	first check to see if the begin date selected is before today
	if ((($beginYear == $thisYear) && ($beginMonth >= $thisMonth)) || //		if this year is selected and the begin month is later than this month
	    (($beginYear == $thisYear) && ($beginMonth == $thisMonth) && ($beginDate >= $thisDate)) || // or if this year selected and this month selected and the date selected is later than today
	     ($beginYear > $thisYear)) //											or if the year is later than this year
																			//	next, check the end date against the begin date
		if (($convertedEndDate == null) || //									if end date is null
		   (($beginYear == $endYear) && ($beginMonth < $endMonth)) || //		if this year is selected and the begin month is earlier than the end month
	       (($beginYear == $endYear) && ($beginMonth == $endMonth) && ($beginDate < $endDate)) || // or if this year is selected and this month selected and the begin date is earlier than today
			($beginYear < $endYear)) //											or if the begin year is earlier than end year
	    	{ //																if it passes all these tests, then the dates are valid, go ahead and insert them in the Events table
				$query = "INSERT INTO Events (beginDate, endDate, title, description, summary) values ('$convertedBeginDate', '$convertedEndDate', '$title', '$description', '$summary')";
				mysql_query($query,$link) or die ("couldn't add data to \"Events\" table: ".mysql_error());
			}
	else {$flag = "redirect";} //												if 
	if ($flag == "redirect") {header("Location:redirectAddListing.html");}
	else {header("Location:eventsAdmin_listings.php");}
	mysql_close($link);
?>