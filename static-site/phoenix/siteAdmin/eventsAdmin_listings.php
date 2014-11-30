<?php
	include("../tpl/siteAdmin/siteAdmin_head.tpl");
	include("../tpl/siteAdmin/siteAdmin_menu.tpl");
?>
	<div class="SAmainTable" style="vertical-align: top">
	<div class="font2" id="textBkgd1">Below you can add, edit or delete Events listings</div><br/>
		<div class="font3" id="drawBorder">
			<?php
				$hostpath = "iaccwnet.ipowermysql.com";
				$user = "iaccwnet_phx";
				$password = "aleviola";
				$db = "iaccwnet_phx";
				print "<div class=\"font2\">\n";
				print "\tStatus:<br/>\n";
				print "</div>\n";
				$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
				if (! $link)
					die( "couldn't connect to MySQL");
				print "<div class=\"font2\">\n";
				print "\tSuccessfully connected to server\n";
				print "</div>\n";
				mysql_select_db($db)
					or die ("Couldn't open $db: ".mysql_error());
				print "<div class=\"font2\">\n";
				print "\tSuccessfully selected database \"$db\"\n";
				print "</div>\n";
				$result = mysql_query("SELECT id, beginDate, endDate, title, summary FROM Events ORDER BY beginDate ASC");
				$num_rows = mysql_num_rows($result);
				if ($num_rows == 0) {
					print "<div class=\"font2\">\n";
					print "There are currently no events in the database.<br/>";
					print "</div>\n";
					print "</div><br/>\n";
					}
				else {
					if ($num_rows == 1) {
						print "<div class=\"font2\">\n";
						print "There is currently $num_rows event in the database<br/><br/>";
						print "</div>\n";
						print "</div><br/>\n";
						}
					else {
						print "<div class=\"font2\">\n";
						print "There are currently $num_rows events in the database<br/><br/>";
						print "</div>\n";
						print "</div><br/>\n";
						}
					print "<div class=\"font2\" id=\"textBkgd1\">\n";
					print "\tIf you are done editing the events, you must re-publish the Events page.<br/>\n";
					print "</div><br/>\n";
					print "<div style=\"text-align: center\">\n";
					print "<a href=\"eventsAdmin_buildNewEventsPage.php?link=../events.html\" target=\"_blank\" class=\"font2\" id=\"textBkgd2\">\n";
					print "\tClick here to publish the new Events page</a>\n";
					print "</div><br/>\n";
					print "<div class=\"font2\" id=\"textBkgd1\">\n";
					print "\tEdit or delete an event here:\n";
					print "</div>\n";
					print "<table border=\"2\" cellpadding=\"1\">\n";
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
					print "\t\tsummary\n";
					print "\t\t</th>\n";
					print "\t\t<th class=\"font2\">\n";
					print "\t\tedit?\n";
					print "\t\t</th>\n";
					print "\t\t<th class=\"font2\">\n";
					print "\t\tdelete?\n";
					print "\t\t</th>\n";
					print "\t</tr>\n";
					while ($a_row = mysql_fetch_row($result)) {
						print "<tr>\n";
						foreach ($a_row as $key => $field)
							if ($key > 2) print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">$field</td>\n";//if this is not the id or date field, print field
							else if (($key == 1) || ($key == 2))  //			if it is the begin date or end date
									if ($a_row[2] != null) { //					don't bother converting a null end date
										$date = explode("-",$a_row[$key]); //			convert the date to an array of 3 separate variables
										switch ($date[1]) { //							convert the month from a string of numbers to the alpha equivalent
										case "00":
											$date[1] = "";
											break;
										case "01":
											$date[1] = "Jan";
											break;
										case "02":
											$date[1] = "Feb";
											break;
										case "03":
											$date[1] = "Mar";
											break;
										case "04":
											$date[1] = "Apr";
											break;
										case "05":
											$date[1] = "May";
											break;
										case "06":
											$date[1] = "Jun";
											break;
										case "07":
											$date[1] = "Jul";
											break;
										case "08":
											$date[1] = "Aug";
											break;
										case "09":
											$date[1] = "Sep";
										break;
										case "10":
											$date[1] = "Oct";
											break;
										case "11":
											$date[1] = "Nov";
											break;
										case "12":
											$date[1] = "Dec";
											break;
										}
									if ($date[0] == "0000") $date[0] = "";
									if ($date[2] == "00") $date[2] = "";
								$transDate = $date[1]." ".$date[2]." ".$date[0];
								print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">".$transDate."</td>\n";
							}								
						print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">\n";
						print "\t\t<form action=\"eventsAdmin_editOrDelete.php\" method=\"get\">\n";
						print "\t\t\t<input type=\"checkbox\" name=\"edit[]\" value=\"$a_row[0]\" />\n";
						print "\t</td>\n";
						print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">\n";
						print "\t\t<form action=\"eventsAdmin_editOrDelete.php\" method=\"get\">\n";
						print "\t\t\t<input type=\"checkbox\" name=\"delete[]\" value=\"$a_row[0]\" />\n";
						print "\t</td>\n";
						print "</tr>\n";
						}
					print "</table><br/>\n";
					print "<input type=\"submit\" value=\"submit\" />\n<input type=\"reset\" value=\"clear\" />\n";
					print "</form><br/><br/>\n";
					}
/* add events */
				print "<div class=\"font2\" id=\"textBkgd1\">\n";
				print "\tAdd an event here:\n";
				print "</div>\n";
				print "<div class=\"font3\" id=\"drawBorder\">\n";
				print "\tselect a start date:\n";
				print "<form action=\"eventsAdmin_addListing.php\" method=\"post\">\n";
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
				print "\t</select>\n";
				print "\t\t<div class=\"forceValign\">Enter event title:</div>\t<input type=\"text\" name=\"title\" /><br/>\n";
				print "\t\t<div class=\"forceValign\">Enter event description:</div><textarea name=\"description\" rows=\"7\" cols=\"80\"></textarea><br/><br/>\n";
				print "\t<input type=\"submit\" value=\"submit\" />\n<input type=\"reset\" value=\"clear\" />\n";
				print "</form>\n";
				print "</div>\n";
				print "</div>\n";
/* delete events 
				print "<div class=\"font2\" id=\"drawBorder\">\n";
				print "\tDelete an event here:<br/><br/>";
				print "</div>";
				print "<div class=\"font3\">\n";
				print "\t<form action=\"eventsAdmin_deleteListing.php\" method=\"get\">\n";
				print "\t\tEnter the ID number of the event to delete:<input type=\"text\" name=\"idToDelete\" size=\"3\"/><br/>\n";
				print "\t<input type=\"submit\" value=\"submit\" />\n\t<input type=\"reset\" value=\"clear\" />\n";
				print "\t</form>\n";
				print "\t</div>\n";
 edit events 
				print "<div class=\"font2\" id=\"drawBorder\">\n";
				print "\tEdit an event here:<br/><br/>";
				print "</div>";
				print "<div class=\"font3\">\n";
				print "\t<form action=\"eventsAdmin_editListing.php\" method=\"get\">\n";
				print "\t\tEnter the ID number of the event to edit:<input type=\"text\" name=\"idToEdit\" size=\"3\"/><br/>\n";
				print "\t<input type=\"submit\" value=\"submit\" />\n\t<input type=\"reset\" value=\"clear\" />\n";
				print "\t</form>\n";
				print "\t</div>\n";*/
				mysql_close($link);
			?>
</body>
</html>	