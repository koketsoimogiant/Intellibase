<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select * from creds where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$session_user = $row['username'];
$session_names = $row['names'];
$session_number = $row['number'];
$session_role = $row['role'];

if(!isset($_SESSION['login_user'])){
    header("location:admin.php");
}
?>