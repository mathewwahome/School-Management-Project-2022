<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "students_results";

$connection = mysqli_connect($host,$user,$password,$dbName);
if (!isset($connection)){
    die("Db connection failled");
}
