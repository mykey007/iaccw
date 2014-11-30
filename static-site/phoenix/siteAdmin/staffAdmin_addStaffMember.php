<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password);
	$fullName = $firstname." ".$middlename." ".$lastname;
	if ($honorific != null) $fullName = $fullName." ".$honorific; //			build the full name
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
	if (strlen($bio) <= 64) //													if the bio has 64 or less characters
		$biosummary = $bio; //													make the biosummary same as the bio
	else {
		$bioArray = str_split($bio); //											split the bio into an array of individual characters	
		for ($x = 0; $x <= 64;$x++) { //										add the first 64 characters to the biosummary
				$biosummary .= $bioArray[$x];
				}
		$stringLength = strlen($bio); //										get the number of characters in the bio
		$stopAddingCharacters = 0;
		for ($x = 64; $x <= $stringLength; ++$x) //								add characters to the biosummary until a space is encountered
			if (($bioArray[$x] != " ") && ($stopAddingCharacters = 0))
				$biosummary .= $bioArray[$x];
			else
				$stopAddingCharacters = 1; //									stop adding characters to biosummary when a space is encountered
		$biosummary .= "..."; //												append ellipses
		}
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	$query = "INSERT INTO Staff (fullname, firstname, middlename, lastname, honorific, title, rank, bio, biosummary) VALUES ('$fullName', '$firstname', '$middlename', '$lastname', '$honorific', '$title', '$rank', '$bio', '$biosummary')";
	mysql_query($query,$link) or die ("couldn't add data to \"Events\" table: ".mysql_error());
	header("Location:staffAdmin_list.php");
	mysql_close($link);
?>