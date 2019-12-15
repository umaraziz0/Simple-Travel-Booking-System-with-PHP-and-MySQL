<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} /*else {
    echo "Connection successful.";
    echo "<br>";
}*/

mysqli_set_charset($link, 'utf8');
/*
if(!mysqli_set_charset($link, 'utf8'))
{
    $output = "Unable to set database encoding.";
    echo $output;
    exit();
} else {
    echo "Default character set.";
}*/
?>