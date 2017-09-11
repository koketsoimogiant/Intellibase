<?php

$host="localhost";
$port=3306;
$user="root";
$password="";
$dbname="database";

$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

if(!$con){
    echo "Connection can not be established...";
}

$con->close();
?>