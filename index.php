<?php

echo "Hostname: " . gethostname() . "<br />";

$dbname = getenv("MYSQL_DATABASE");
$dbhost = "127.0.0.1";
$dbuser = getenv("MYSQL_USER");
$dbpass = getenv("MYSQL_PASSWORD");

echo "Connection status: ";

try {
    $dbh = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname, $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $dbh=null;
    echo "Connected to database!<br />";
}
catch(PDOException $e){
    echo $e->getMessage() . "<br />";
}
