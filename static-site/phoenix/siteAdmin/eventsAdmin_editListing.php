<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	mysql_select_db($db,$link) or die("couldn't open $db: ".mysql_error());
	$query = "SELECT * FROM eventsToEdit";
	if (!mysql_query($query, $link)) {
		$dberror = mysql_error();
		print $dberror;
		print "there is an error";
		return false;
		}
	$result = mysql_query($query, $link);
	$rowFetch = mysql_fetch_row($result);
	if ($rowFetch[5] == null) {
		$query = "SELECT * FROM eventsToDelete"; //check if there are events to delete
		$result = mysql_query($query,$link);
		$rowFetchDelete = mysql_fetch_row($result);
		if ($rowFetchDelete[5] == null) {
			header("Location:eventsAdmin_listings.php"); // if not, go to listings page
			break;
			}
		else {
			header("Location:eventsAdmin_deleteListing.php"); //if so, go to delete page
			break;
			}
		}
	else {
		include("../tpl/siteAdmin/siteAdmin_head.tpl");
		include("../tpl/siteAdmin/siteAdmin_menu.tpl");
		print "<div class=\"SAmainTable\" style=\"vertical-align: top\">\n";
		include("../tpl/html_head.tpl");
		print "<div class=\"font2\" id=\"textBkgd1\">\n";
		print "\tThe event you are editing is:<br/>\n";
		print "</div>\n";
		print "<table border=\"2\" class=\"font2\">\n";
		print "\t<tr>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tbegins\n";
		print "\t\t</th>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tends\n";
		print "\t\t</th>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tevent\n";
		print "\t\t</th>\n";
		print "\t\t<th class=\"font2\">\n";
		print "\t\tdescription\n";
		print "\t\t</th>\n";
		print "\t</tr>\n";
		$query = "SELECT * FROM eventsToEdit";
		$result = mysql_query($query, $link);
		$a_row = mysql_fetch_row($result);
		if ($a_row[0] == null) {
			print "There is nothing in the array";
			}
		print "\t<tr>\n";
		foreach ($a_row as $key => $field) {
			if ((($key != 0) && ($key != 5)) || //								so long as the key is not that of the id field or editID field
				(($key == 2) && ($field != "0000-00-00"))) //					or, if the end date is not 0000-00-00) 
					{ //														print the field's value
					print "\t\t<td class=\"font2\" id=\"drawBorder\" valign=\"top\" style=\"font-weight: normal\">$field</td>\n";
					}
				}
		print "\t</tr>\n";
		print "</table><br/>\n";
		print "<div class=\"font2\" id=\"textBkgd1\">\n";
		print "\tEdit event date:<br/>\n";
		print "</div>\n";
		print "<div class=\"font3\" id=\"drawBorder\">\n";
		print "\tselect a start date:\n";
		print "\t<form action=\"eventsAdmin_editListingForSure.php\" method=\"post\">\n";
		include ("../tpl/form_selectBeginMonth.tpl");
		include ("../tpl/form_selectBeginDate.tpl");
		print "\t<select name=\"beginYear\">\n";
		print "\t\t<option value=\"2007\" selected=\"selected\">2007</option>\n";
		print "\t\t<option value=\"2008\">2008</option>\n";
		print "\t\t<option value=\"2009\">2009</option>\n";
		print "\t</select>\n";
		print "\tselect an end date if needed:\n";
		include ("../tpl/form_selectEndMonth.tpl");
		include ("../tpl/form_selectEndDate.tpl");
		print "\t<select name=\"endYear\">\n";
		print "\t\t<option value=\"\" selected=\"selected\">begin</option>\n";
		print "\t\t<option value=\"2007\">2007</option>\n";
		print "\t\t<option value=\"2008\">2008</option>\n";
		print "\t\t<option value=\"2009\">2009</option>\n";
		print "\t</select><br/><br/>\n";
		print "\t\t<div class=\"font3\">Edit event title:\t<input type=\"text\" name=\"title\" value=\"$a_row[3]\" />\n";
		print "\t\t</div><br/>\n";
		print "\t\t<div class=\"font3\">Edit event description:<textarea name=\"description\" rows=\"7\" cols=\"80\">\n";
		print htmlspecialchars(stripslashes($a_row[4]));
		print "\t\t</textarea></div><br/>\n";
		print "\t<input type=\"hidden\" name=\"idToEdit\" value=\"$a_row[0]\" />\n";
		print "\t<input type=\"submit\" value=\"submit\" />\n<input type=\"reset\" value=\"clear\" />\n";
		print "\t</form>\n";
		print "</div>\n";
		print "\t<div class=\"font2\" id=\"textBkgd1\">\n";
		print "\t<form action=\"eventsAdmin_editListingForSure.php\" method=\"get\">\n";
		print "\t\t<input type=\"checkbox\" name=\"changedMind\" value=\"doNotEdit\" id=\"textBkgd1\" />I changed my mind; don't edit this!<br/>\n";
		print "\t\t<input type=\"hidden\" name=\"idToEdit\" value=\"$a_row[0]\" />\n";
		print "\t\t<input type=\"submit\" value=\"submit\" />\n";
		print "\t</form>\n";
		print "\t</div>\n";
		print "</div>\n";
		print "</div>\n";
		print "</body>\n</html>";
	}
	mysql_close($link);
?>