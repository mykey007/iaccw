<?php
	include("../tpl/siteAdmin/siteAdmin_head.tpl");
	include("../tpl/siteAdmin/siteAdmin_menu.tpl");
?>
	<br/><br/><br/>
	<div class="font2" id="forceCenterAlign">Events page administration</div><br/><br/>
	<div class="font3" id="forceCenterAlign">Use the image below to select the area of the Events page which you would like to edit.</div>
	<br/><br/>
	<div id="forceCenterAlign">
		<img src="jpg/events.jpg" align="center" width="400" height="313" alt="IACCW Events page image map" usemap="#eventsPage" />
	</div>
	<map id="eventsPage" name="eventsPage">
		<area shape="rect" coords="4,85,120,137" href="eventsAdmin_summary.php" title="edit Events summary" target="_self" alt="events summary" />
		<area shape="rect" coords="150,85,375,283" href="eventsAdmin_listings.php" title="edit Events listings" target="_self" alt="events listings" />
		<area shape="rect" coords="4,145,118,283" href="#" title="this area cannot be edited" alt="event details" />
	</map>
</body>
</html>