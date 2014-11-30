<?php
	include("../tpl/siteAdmin/siteAdmin_head.tpl");
	include("../tpl/siteAdmin/siteAdmin_menu.tpl");
?>
	<div class="SAmainTable" style="vertical-align: top">
	<div class="font2" id="textBkgd1">Below you can add, edit or delete Staff listings</div>
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
				$result = mysql_query("SELECT id, fullname, firstname, middlename, lastname, honorific, title, rank, bio, biosummary FROM Staff");
				$num_rows = mysql_num_rows($result);
				if ($num_rows == 0) {
					print "<div class=\"font2\">\n";
					print "There are currently no staff members in the database.<br/>";
					print "</div>\n";
					print "</div>\n";
					}
				else {
					if ($num_rows == 1) {
						print "<div class=\"font2\">\n";
						print "There is currently $num_rows staff member in the database<br/><br/>";
						print "</div>\n";
						print "</div>\n";
						}
					else {
						print "<div class=\"font2\">\n";
						print "There are currently $num_rows staff members in the database<br/><br/>";
						print "</div>\n";
						print "</div>\n";
						}
					print "<div class=\"font2\" id=\"textBkgd1\">\n";
					print "\tIf you are done editing the staff, you must re-publish the Staff pages.<br/>\n";
					print "</div><br/>\n";
					print "<div style=\"text-align: center\">\n";
					print "<a href=\"eventsAdmin_buildNewStaffPages.php?link=../staff_madesmond.html\" target=\"_blank\" class=\"font2\" id=\"textBkgd2\">\n";
					print "\tClick here to publish the new Staff pages</a>\n";
					print "</div><br/>\n";
					print "<div class=\"font2\" id=\"textBkgd1\">\n";
					print "\tEdit or delete a staff member here:\n";
					print "</div>\n";
					print "<table border=\"2\" cellpadding=\"1\">\n";
					print "\t<tr>\n";
					print "\t\t<th class=\"font2\">\n";
					print "\t\tname\n";
					print "\t\t</th>\n";
					print "\t\t<th class=\"font2\">\n";
					print "\t\ttitle\n";
					print "\t\t</th>\n";
					print "\t\t<th class=\"font2\">\n";
					print "\t\tbio\n";
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
							if ($key == 1 || $key == 6 || $key == 9) //			print only the 'fullname', 'title', and 'biosummary' fields
								print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">$field</td>\n";
						print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">\n";
						print "\t\t<form action=\"staffAdmin_editOrDelete.php\" method=\"get\">\n";
						print "\t\t\t<input type=\"checkbox\" name=\"edit[]\" value=\"$a_row[0]\" />\n";
						print "\t</td>\n";
						print "\t<td class=\"font3\" id=\"drawBorder\" valign=\"top\">\n";
						print "\t\t<form action=\"staffAdmin_editOrDelete.php\" method=\"get\">\n";
						print "\t\t\t<input type=\"checkbox\" name=\"delete[]\" value=\"$a_row[0]\" />\n";
						print "\t</td>\n";
						print "</tr>\n";
						}
					print "</table><br/>\n";
					print "<input type=\"submit\" value=\"submit\" />\n<input type=\"reset\" value=\"clear\" />\n";
					print "</form><br/><br/>\n";
					}
/* add staff */
				print "<div class=\"font2\" id=\"textBkgd1\">\n";
				print "\tAdd a staff member here:\n";
				print "</div>\n";
				print "<div class=\"font3\" id=\"drawBorder\">\n";
				print "\t<form action=\"staffAdmin_addStaffMember.php\" method=\"post\">\n";
				print "\t\t<div class=\"forceValign\">First name:&nbsp;\t<input type=\"text\" name=\"firstname\" />\n";
				print "\t\t&nbsp;Middle name:&nbsp;<input type=\"text\" name=\"middlename\" />\n";
				print "\t\t&nbsp;Last name:&nbsp;<input type=\"text\" name=\"lastname\" /></div><br/>\n";
				print "\t\t<div class=\"forceValign\">Please enter any titles or suffixes (e.g., PhD or Jr.)<br />\n";
				print "\t\tPlease enter EXACTLY as they should be displayed:&nbsp;<input type=\"text\" name=\"honorific\" /><br/><br/>\n";
				print "\t\tEnter this person's title:&nbsp;<input type=\"text\" name=\"honorific\" /></div><br/>\n";
				print "\t\tSelect the organizational rank of this staff member:\n";
				print "\t\t<select name=\"rank\">\n";
				print "\t\t\t<option value=\"99\" selected=\"selected\">--</option>\n";
				print "\t\t\t<option value=\"0\">we all have equal rank</option>\n";
				print "\t\t\t<option value=\"1\">CEO</option>\n";
				print "\t\t\t<option value=\"2\">VP</option>\n";
				print "\t\t\t<option value=\"3\">Staff</option>\n";
				print "\t\t\t<option value=\"4\">Intern</option>\n";
				print "\t\t</select><br/><br/>\n";
				print "\t\t\t<div class=\"forceValign\">Enter staff member's bio:</div><textarea name=\"bio\" rows=\"12\" cols=\"80\"></textarea><br/><br/>\n";
				print "\t\t<input type=\"submit\" value=\"submit\" />\n<input type=\"reset\" value=\"clear\" />\n";
				print "\t</form>\n";
				print "</div>\n";
				
/* add picture upload here */

				print "<div class=\"font2\" id=\"textBkgd1\">\n";
				print "\tYou may upload a picture for this person here:\n";
				print "</div>\n";
				print "<div class=\"font2\" id=\"drawBorder\">\n";
				print "<form action='" . $_SERVER['PHP_SELF'] . "' method='post' enctype='multipart/form-data'>\n";
				print "\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"250000\" /><div class=\"font2\">1 - select a picture to upload:</div><br/>\n";
				print "\t<input type=\"file\" name=\"imgfile\" /><br/><br/>\n";
				print "\t<div class=\"font2\">2 - click here to \n";
				print "\t\t<input type=\"submit\" value=\"Upload Image\" />\n";
				print "</form>\n";
				print "\t</div>\n";
				print "</div>\n";

/* picture transfer to server */

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$uploaddir = "jpg";
					function getFileExtension($filename = '') {
                		$explode = explode(".", $filename);
                 		if(strlen(end($explode)) > 0 && count($explode) > 1)
                         	return end($explode);
                 		else
                 			return false;
						}
					$pext = getFileExtension($imgfile_name);
					$pext = strtolower($pext);
					if (($pext != "jpg") && ($pext != "jpeg")) {
						print "<h1>ERROR(/h1)Image Extension Unknown.<br/>";
						print "<p>Please upload only a JPEG image with the extension .jpg or .jpeg ONLY<br><br>";
						print "The file you uploaded had the following extension: $pext</p>\n";
						unlink($imgfile);
						exit();
						}
					$imgsize = GetImageSize($imgfile);

/*					if (($imgsize[0] > 250) || ($imgsize[1] > 200)) {
						$tmpimg = tempnam("/tmp", "MKUP");
						system("djpeg $imgfile >$tmpimg");
						system("pnmscale -xy 250 200 $tmpimg | cjpeg -smoo 10 -qual 50 >$imgfile");
						unlink($tmpimg);
						}
*/
					$final_filename = str_replace(" ", "_", $imgfile_name);
					$newfile = $uploaddir."/$final_filename";
					if (is_uploaded_file($imgfile)) {
						if (!copy($imgfile,"$newfile")) {
							print "Error Uploading File.";
							exit();
							}
						}
					unlink($imgfile);
					print "<img src=\"$newfile\">\n";
					}
				print "</div>\n";
				print "</div>\n";
				mysql_close($link);
				

				
			?>
</body>
</html>