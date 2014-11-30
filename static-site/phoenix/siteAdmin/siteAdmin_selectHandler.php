<?php
	switch ($pageEdit) {
		case "Home":
			header("Location:homeAdmin.php");
			break;
		case "News":
			header("Location:newsAdmin.php");
			break;
		case "Members":
			header("Location:membersAdmin.php");
			break;
		case "Events":
			header("Location:eventsAdmin.php");
			break;
		case "Staff":
			header("Location:staffAdmin.php");
			break;
		case "Contact":
			header("Location:contactAdmin.php");
			break;
	}
?>