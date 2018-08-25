<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_acapulco = "127.0.0.1:80";
$database_acapulco = "acapulco";
$username_acapulco = "developer";
$password_acapulco = "testing";
$acapulco = mysql_connect($hostname_acapulco, $username_acapulco, $password_acapulco) or trigger_error(mysql_error(),E_USER_ERROR); 

?>
