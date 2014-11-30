<?php
require_once "connection/DB.php";
$value=12;

$value = (int)$_GET['value'];
if (isset($value) && $value!=0 && $value!=1 ) {
	echo 'NO VALID VALUE!';
	exit;
}
$start = date("Y-m-d");
$end = mktime(0, 0, 0, date("m")  , date("d")+7, date("Y"));
$end = date("Y-m-d", $end);

	$sql = "UPDATE
		  		iaccw_comic
		  		SET  comic_flag=".$value.",
		  		start_date='".$start."',
		  		end_date='".$end."'";  
		  			
	$Result = mysql_query($sql, $connect) or die(mysql_error());

echo "DONE!";
?>