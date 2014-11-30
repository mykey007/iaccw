<?php
	$hostpath = "iaccwnet.ipowermysql.com";
	$user = "iaccwnet_phx";
	$password = "aleviola";
	$db = "iaccwnet_phx";
	$link = mysql_connect($hostpath,$user,$password); //change host name when transferred
	if (! $link)
		die( "couldn't connect to MySQL");
	mysql_select_db($db) or die ("Couldn't open $db: ".mysql_error());
// initialize all file references
	$buildFile = "../events.html";
	$head = "../tpl/events/events_head.tpl";
	$menu = "../tpl/global_menu.tpl";
	$frontPage1 = "../tpl/events/events_frontPage_1.tpl";
	$eventsSummary = "../tpl/events/eventsSummaryText.tpl";
	$frontPage2 = "../tpl/events/events_frontPage_2.tpl";
	$listingsOpen = "../tpl/events/events_listingsOpen.tpl";
	$listingsTableOpen = "../tpl/events/events_listingsTableOpen.tpl";
	$listingsTableRowOpen = "../tpl/events/events_listingsTableRowOpen.tpl";
	$listingsMonthCellOpen = "../tpl/events/events_listingsMonthCellOpen.tpl";
	$listingsMonthCellRowClose = "../tpl/events/events_listingsMonthCellRowClose.tpl";
	$listingsDateCellOpen = "../tpl/events/events_listingsDateCellOpen.tpl";
	$listingsDateCellClose = "../tpl/events/events_listingsDateCellClose.tpl";
	$listingsTitleCellOpen = "../tpl/events/events_listingsTitleCellOpen.tpl";
	$listingsTitleCellClose = "../tpl/events/events_listingsTitleCellClose.tpl";
	$eventsSummLinkOpen = "../tpl/events/events_summaryLinkOpen.tpl";
	$eventsSummLinkOpen2 = "../tpl/events/events_summaryLinkOpen2.tpl";
	$eventsSummLinkClose = "../tpl/events/events_summaryLinkClose.tpl";
	$listingsSummCellOpen = "../tpl/events/events_listingsSummCellOpen.tpl";
	$listingsSummCellClose = "../tpl/events/events_listingsSummCellClose.tpl";
	$listingsClose = "../tpl/events/events_listingsClose.tpl";
	$eventsTitleOpen = "../tpl/events/events_titleOpen.tpl";
	$eventsEventTitle = "../tpl/events/eventsEventTitle.tpl";
	$eventsDescOpen = "../tpl/events/events_descriptionOpen.tpl";
	$eventsEventDesc = "../tpl/events/eventsEventDesc.tpl";
	$eventsTitleDescClose = "../tpl/events/events_descTitleClose.tpl";
	$footer = "../tpl/global_footer.tpl";
//begin building the file
	$Events = fopen($buildFile, 'w') or die ("can't open events.html");
	$f1open = fopen($head, 'r');
	$f1read = fread($f1open, filesize($head));
	fwrite($Events, $f1read);
	$f2open = fopen($menu, 'r');
	$f2read = fread($f2open, filesize($menu));
	fwrite($Events, $f2read);
	$f3open = fopen($frontPage1, 'r');
	$f3read = fread($f3open, filesize($frontPage1));
	fwrite($Events, $f3read);
	$eventsSummaryOpen = fopen($eventsSummary, 'r');
	$eventsSummaryRead = fread($eventsSummaryOpen, filesize($eventsSummary));
	fwrite($Events, $eventsSummaryRead);
	$f4open = fopen($frontPage2, 'r');
	$f4read = fread($f4open, filesize($frontPage2));
	fwrite($Events, $f4read);
	$f5open = fopen($listingsOpen, 'r');
	$f5read = fread($f5open, filesize($listingsOpen));
	fwrite($Events, $f5read);
	$query = "SELECT * FROM Events ORDER BY beginDate ASC";
	$result = mysql_query($query);
	$tableOpen = fopen($listingsTableOpen, 'r');
	$tableOpenRead = fread($tableOpen, filesize($listingsTableOpen));
	fwrite($Events, $tableOpenRead);
	$num_rows = mysql_num_rows($result);
	if ($num_rows == 0) header("Location:eventsAdmin_listings.php");
	else {
		$oldEventFlag = 'n';													// re-initialize
		while ($a_row = mysql_fetch_row($result)) { 							// while there is a row of events data
			$bDate = explode("-",$a_row[1]);
			$eDate = explode("-",$a_row[2]);
			$beginDateTime = mktime(0,0,0,$bDate[1],$bDate[2],$bDate[0]);		// render into correct time format
			$endDateTime = mktime(0,0,0,$eDate[1],$eDate[2],$eDate[0]);			// render into correct time format
			$thisMonth = date("F");												// current month
			$thisDate = date("d");												// current date
			$thisYear = date("Y");												// current year
			$thisTime = date("U");												// seconds since Unix Epoch
			if (($beginDateTime >= $thisTime) || ($endDateTime >= $thisTime)) {	// if today's date is after the event's start date and end date
				$tableRowOpen = fopen($listingsTableRowOpen, 'r');
				$tableRowOpenRead = fread($tableRowOpen,filesize($listingsTableRowOpen));
				fwrite($Events, $tableRowOpenRead);
				foreach ($a_row as $key => $field) { 								// for each row of event data
					if ($key == 1) { 												// if it is the beginDate field
						$date = explode("-",$a_row[$key]); 							// convert the date to an array of 3 separate variables
						$beginDate = $date[2]; 										// to remember the begin date in case we have to append the end date
							switch ($date[1]) { 									// convert the month from a string of numbers to the alpha equivalent
							case "00":
								$date[1]="";
								break;
							case "01":
								$date[1] = "January";
								break;
							case "02":
								$date[1] = "February";
								break;
							case "03":
								$date[1] = "March";
								break;
							case "04":
								$date[1] = "April";
								break;
							case "05":
								$date[1] = "May";
								break;
							case "06":
								$date[1] = "June";
								break;
							case "07":
								$date[1] = "July";
								break;
							case "08":
								$date[1] = "August";
								break;
							case "09":
								$date[1] = "September";
								break;
							case "10":
								$date[1] = "October";
								break;
							case "11":
								$date[1] = "November";
								break;
							case "12":
								$date[1] = "December";
								break;
							}
						}
					if ($key == 2) { 											// if it is the endDate field
						$endDate = explode("-", $a_row[2]);
						if ($a_row[2] != "0000-00-00")
							$beginAndEndDate = $beginDate."-".$endDate[2];
						else $beginAndEndDate = $beginDate;
						}
					if ($date[1] != $currentMonth) { 							// if the month of the current event is not the same as previous event, write the month
						$currentMonth = $date[1];
						$monthCellOpen = fopen($listingsMonthCellOpen, 'r');
						$monthCellOpenRead = fread($monthCellOpen,filesize($listingsMonthCellOpen));
						fwrite($Events, $monthCellOpenRead);
						fwrite($Events, $date[1]);
						$monthCellRowClose = fopen($listingsMonthCellRowClose, 'r');
						$monthCellRowCloseRead = fread($monthCellRowClose, 12);
						fwrite($Events,$monthCellRowCloseRead);
						}
					}
				$dateCellOpen = fopen($listingsDateCellOpen, 'r'); 				// write the date to a table cell
				$dateCellOpenRead = fread($dateCellOpen, filesize($listingsDateCellOpen));
				fwrite($Events, $dateCellOpenRead);
				fwrite($Events, $beginAndEndDate);
				$dateCellClose = fopen($listingsDateCellClose, 'r'); 			// close the date table cell
				$dateCellCloseRead = fread($dateCellClose, filesize($listingsDateCellClose));
				fwrite($Events, $dateCellCloseRead);
				$titleCellOpen = fopen($listingsTitleCellOpen, 'r'); 			// write the event title to a table cell
				$titleCellOpenRead = fread($titleCellOpen, filesize($listingsTitleCellOpen));
				fwrite($Events, $titleCellOpenRead);
				fwrite($Events, $a_row[3]); 									// write the event title
				$titleCellClose = fopen($listingsTitleCellClose, 'r'); 			// close the title table cell
				$titleCellCloseRead = fread($titleCellClose, filesize($listingsTitleCellClose));
				fwrite($Events, $titleCellCloseRead);
				$summCellOpen = fopen($listingsSummCellOpen, 'r'); 				// open the event summary table cell
				$summCellOpenRead = fread($summCellOpen, filesize($listingsSummCellOpen));
				fwrite($Events, $summCellOpenRead);
				$eventsSummLinkOpenOpen = fopen($eventsSummLinkOpen, 'r');		// begin the anchor link
				$eventsSummLinkOpenRead = fread($eventsSummLinkOpenOpen, filesize($eventsSummLinkOpen));
				fwrite($Events, $eventsSummLinkOpenRead);
				fwrite($Events, $a_row[0]);										// write the ID for this event so it can be passed
				$eventsSummLinkOpen2Open = fopen($eventsSummLinkOpen2, 'r'); 	// close the opening anchor link
				$eventsSummLinkOpen2Read = fread($eventsSummLinkOpen2Open, filesize($eventsSummLinkOpen2));
				fwrite($Events, $eventsSummLinkOpen2Read);
				fwrite($Events, $a_row[5]);										// write the event summary
				$eventsSummLinkCloseOpen = fopen($eventsSummLinkClose, 'r');	// close the anchor tag
				$eventsSummLinkCloseRead = fread($eventsSummLinkCloseOpen, filesize($eventsSummLinkClose));
				fwrite($Events,$eventsSummLinkCloseRead);
				$summCellClose = fopen($listingsSummCellClose, 'r'); 			// close the event summary table cell
				$summCellCloseRead = fread($summCellClose, filesize($listingsSummCellClose));
				fwrite($Events, $summCellCloseRead);
				}
			}
		}
		$f6open = fopen($listingsClose, 'r'); //								close the listings table
		$f6read = fread($f6open, filesize($listingsClose));
		fwrite($Events, $f6read);	
		$f7open = fopen($eventsTitleOpen, 'r');
		$f7read = fread($f7open, filesize($eventsTitleOpen));
		fwrite($Events, $f7read);
		$eventsEventTitleOpen = fopen($eventsEventTitle, 'r'); //				get the event title
		$theFilesize = filesize($eventsEventDesc);
		$eventsEventTitleRead = fread($eventsEventTitleOpen,$theFilesize);
		fwrite($Events, $eventsEventTitleRead);
		$f8open = fopen($eventsDescOpen, 'r');
		$f8read = fread($f8open, filesize($eventsDescOpen));
		fwrite($Events, $f8read);
		$eventsEventDescOpen = fopen($eventsEventDesc, 'r'); //				get the event description
		$theFilesize = filesize($eventsEventDesc);
		$eventsEventDescRead = fread($eventsEventDescOpen,$theFilesize);
		fwrite($Events, $eventsEventDescRead);
		$f9open = fopen($eventsTitleDescClose, 'r');
		$f9read = fread($f9open, filesize($eventsTitleDescClose));
		fwrite($Events, $f9read);
		$f10open = fopen($footer, 'r');
		$f10read = fread($f10open, filesize($footer));
		fwrite($Events, $f10read);
		$gotoNewPage = $_GET['link'];
		header("Location:$gotoNewPage");
		fclose($Events);
	?>