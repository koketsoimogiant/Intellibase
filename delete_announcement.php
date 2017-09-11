<?php
require 'connect.php';


$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

if (isset($_GET['id'])){

    $student = $_GET['id'];
    $from = $_GET['from'];
    echo '<br>'.$student.' is the row number';
    echo '<br>'.$from.' is where this id comes from';

    if (!isset($_GET['id'])){
        echo '<br>:Error: action cannot be performed: failed to identify database table row.';
    }else{
        echo '<br>Deleting row : '.$student;
        $sql2 = "DELETE FROM sitepost WHERE sitepost_id = ".$student.";";

        if ($con->query($sql2) == TRUE) {
            echo "New record deleted successfully";
            header("Location:".$from.".php");
        } else {
            echo "Error: " . $sql2 . "<br>" . $con->error;
        }
    }
}
//if(!isset($_SESSION['login_user'])){
//    header("location:".$from.".php");
//}
$con->close();
?>
