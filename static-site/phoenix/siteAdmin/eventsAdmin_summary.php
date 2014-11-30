<?php
	include("../tpl/siteAdmin/siteAdmin_head.tpl");
	include("../tpl/siteAdmin/siteAdmin_menu.tpl");
?>
	<div class="SAmainTable" style="vertical-align: top">
	<div class="font2" id="textBkgd1">Here you can change the Events Summary text</div>
		<form action="eventsAdmin_summaryDone.php" method="post">
			<textarea name="eventsSummary" rows="5" cols="40">Enter your text here</textarea>
			<input type="submit" value="submit" />
			<input type="reset" value="clear" />
		</form>
	<div class="font2" id="textBkgd1">The current Events Summary text is:</div><br />
		<?php
			print "<div class=\"font3\" id=\"drawBorder\">\n";
			$fileContents = file_get_contents("../tpl/events/eventsSummaryText.tpl");
			echo ($fileContents);
			print "</div>\n";
		?>
	<br/><br/>
	<div class="font3" id="textBkgd1">You may also <a href="eventsAdmin.php" title="return to main events administration page" class="font2">return to the main Events administration page,</a><br/>
	or <a href="index.php" title="return to site administration main page" class="font2">return to the main Site Administration page.</a></div>
</div>
</body>
</html>