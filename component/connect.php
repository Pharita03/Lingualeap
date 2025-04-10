<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "lingualeap";
$port = 3306;

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);
if (!$connection) {
    die("Not connect!!!" . mysqli_connect_error());
}
else{
    echo"Connected!! <br>";
}

?>