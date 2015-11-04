<?php
$mysql_host = "fdb12.awardspace.net";
$mysql_database = "1985694_gb";
$mysql_user = "1985694_gb";
$mysql_password = "databasepassword1";

$db =mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>