<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="5; URL=index.html">
<title>Italy-America Chamber of Commerce West - Phoenix</title>
<style type="text/css" media="screen">@import url(css/iaccw.css);</style>
<link rel="stylesheet" href="css/iaccw.css" type="text/css" />
</head>
<div class="iaccwHeader">
	<object type="application/x-shockwave-flash"
			data="loader.swf?path=iaccwHeader.swf" 
			width="766" height="114">
		<param name="movie" value="loader.swf?path=iaccwHeader.swf" />
	</object>
</div>
<div class="mainTable">
	<table cellspacing="0" cellpadding="0" border="0" height="31" width="766" align="left">
	<tr>
	<td>
		<table cellspacing="0" cellpadding="0" border="0" height="31" width="766" align="left">
		<tr align="left">
			<td width="150" id="menu">
				<img src="gif/spacer.gif" width="150" height="31" alt="" id="spacer1" />
			</td>
			<td width="53" id="menu" align="left">
				<a href="index.html" title="Home">Home</a>
			</td>
			<td width="11" id="menu" align="center">
				<img src="gif/smallcircle.gif" width="11" height="11" alt="" id="smallcircle1" />
			</td>
			<td width="62" id="menu" align="center">
				<a href="news.html" title="News">News</a>
			</td>
			<td width="11" id="menu" align="center">
				<img src="gif/smallcircle.gif" width="11" height="11" alt="" id="smallcircle2" />
			</td>
			<td width="88" id="menu" align="center">
				<a href="members.html" title="Members">Members</a>
			</td>
			<td width="11" id="menu" align="center">
				<img src="gif/smallcircle.gif" width="11" height="11" alt="" id="smallcircle3" />
			</td>
			<td width="74" id="menu" align="center">
				<a href="events.html" title="Events">Events</a>
			</td>
			<td width="11" id="menu" align="center">
				<img src="gif/smallcircle.gif" width="11" height="11" alt="" id="smallcircle4" />
			</td>
			<td width="60" id="menu" align="center">
				<a href="staff_madesmond.html" title="Staff">Staff</a>
			</td>
			<td width="11" id="menu" align="center">
				<img src="gif/smallcircle.gif" width="11" height="11" alt="" id="smallcircle5" /> 
			</td>
			<td width="70" id="menu" align="center">
				<a href="#" title="Contact">Contact</a>
			</td>
			<td width="150" id="menu">
				<img src="gif/spacer.gif" width="150" height="31" alt="" id="spacer2" />
			</td>
		</tr>
		<tr>
			<td colspan="13" height="4">
<!--				<img src="gif/spacer.gif" width="766" height="6" alt="" id="spacer3" />-->
			</td>
		</tr>
		<tr>
			<td colspan="13" height="3">
				<img src="gif/spacerBlack.gif" width="766" height="3" alt="" id="spacerBlack1" />
			</td>
		</tr>
		</table>
	</td>
	</tr>
</table>
<?php

$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['visitor']; 
$visitormail = $_POST['visitormail']; 
$notes = $_POST['notes'];
$subject = $_POST['subject'];

if ((!$visitormail == "") && (!strstr($visitormail,"@")))
	{echo "<div class=\"font2\">You did not enter a valid email address. Please use the &quot;Back&quot; button to re-enter the address.</div>\n";}
if (!strstr($visitormail,"."))
	{echo "<div class=\"font2\">You did not write a message. Please use the &quot;Back&quot; button to enter your message.</div>\n";}
if (empty($visitor) || empty($visitormail) || empty($notes)) 
	{echo "<div class=\"font2\">You left a name, email or message field empty. Please use the &quot;Back button and fill in the missing info.</div>\n";}

$todayis = date("l, F j, Y, g:i a") ;

$notes = stripcslashes($notes); 

$message = "Date Sent: $todayis [MST] \n
Message: $notes \n 
Subject: $subject \n
From: $visitor ($visitormail)\n
IP Address : $ip \n
Browser Info: $httpagent \n
Referring Site : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("video@30fps.com", $subject, $message, $from);

?>

<p align="center">
Date: <?php echo $todayis ?> 
<br />
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> ) 
<br />

Subject: <?php echo $subject ?>
<br /> 
Message:<br /> 
<?php $notesout = str_replace("\r", "<br/>", $notes); 
echo $notesout; ?> 
<br />
<?php echo $ip ?> 

<br /><br />
<div class="font2" style="text-align: center;">You will be redirected to our home page momentarily.</div>
</body>
</html>