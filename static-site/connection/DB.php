<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

$connect = mysql_connect ("mysqlv106", "iaccwnet", "Chamber09") or die('Cannot connect to the database because: ' . mysql_error());
mysql_select_db ("iaccwdb");



?>