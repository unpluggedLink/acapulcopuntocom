<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_acapulco = "127.0.0.1";
$database_acapulco = "acapulco";
$username_acapulco = "developer";
$password_acapulco = "testing";
/* Aqui pongo un @ antes de mysql para no mostrar la adevertencia */
$acapulco = @mysql_pconnect($hostname_acapulco, $username_acapulco, $password_acapulco) or trigger_error(mysql_error(),E_USER_ERROR); 

?>
