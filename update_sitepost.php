<?php

require 'connect.php';

$con -> close();
$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $timedate = date('Y-m-d H:i:s');
    // prepare and bind
    if (!isset($_GET['user'])) {
        $stmt = $con->prepare("UPDATE sitepost SET student_no=?, post=?, date_time=? WHERE sitepost_id=?");
    }
    else if (isset($_GET['feedback'])){
        $stmt = $con->prepare("UPDATE sitepost SET student_no=?, post=?, date_time=? WHERE sitepost_id=?");
    }

    $stmt->bind_param("sss", $student, $text, $timedate);

    // set parameters and execute
    $student = $_GET['user'];
    $text = $_GET['feedback'];

    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
}
else{
    echo "Something went wrong here: <br>".$sql."<br> Type something in the text input areas please.";
}

mysqli_close($con);
if(!isset($_SESSION['login_user'])){
    header("location:announce.php");
}
?>

