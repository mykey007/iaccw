<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	$query = "SELECT * FROM eventsToDelete";
	if (!mysql_query($query, $link)) {
		$dberror = mysql_error();
		print $dberror;
		print "there is an error";
		return false;
		}
	$result = mysql_query($query, $link);
	$a_row = mysql_fetch_row($result);
	if ($a_row[4] == null) {
		header("Location:eventsAdmin_listings.php"); //if there are no more events to delete, go to listings page
		break;
		}
	else {
		include("../tpl/html_head.tpl");
		print "<div class=\"font2\">\n";
		print "\tThe event you have chosen to delete is:<br/>\n";
		print "</div>\n";
		print "<table border=\"2\" class=\"font2\">\n";
		print "\t<tr>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tdate\n";
		print "\t\t</th>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tevent\n";
		print "\t\t</th>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tdescription\n";
		print "\t\t</th>\n";
		print "\t<tr>\n";
		foreach ($a_row as $key => $field) 
			if (($key != 0) && ($key != 4)) 
				print "\t\t<td class=\"font2\" valign=\"top\">$field</td>\n";
		print "\t</tr>\n";
		print "</table><br/>\n";
		print "<div class=\"font2\">\n";
		print "\tAre you sure you want to do this?";
		print "<form action=\"eventsAdmin_deleteListingForSure.php\" method=\"post\"><input type=\"radio\" name=\"deleteIt\" value=\"yes\" />Yes&nbsp;&nbsp;<input type=\"radio\" name=\"deleteIt\" value=\"no\" />No\n";
		print "\t<input type=\"submit\" value=\"submit\" />\n";
		print "\t<input type=\"hidden\" name=\"idToDelete\" value=\"$a_row[0]\" />\n";
		print "</form>\n";
		print "</div>\n";
		print "</body>\n</html>";
	}
	mysql_query($query,$link) or die ("couldn't list data from \"Events\" table: ".mysql_error());
	mysql_close($link);
?>