<?php
//MySQL connection
$DBServer = "localhost";
$DBServer = "127.0.0.1";
$DBName = "dbname";
$DBUser = "dbuser";
$DBPass = "dbpassw";
global $mysqli;
$mysqli = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);
if (!$mysqli->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
}
if (mysqli_connect_errno()) {
  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
}
?>
