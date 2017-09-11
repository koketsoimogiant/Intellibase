<?php 
	require 'connect.php';
if (isset($_GET['user'])){
    if (strlen($_GET['user']) < 1) {
        echo '<div class="col-sm-4">' .
            '<div class="panel panel-primary">' .
            '<div class="panel-heading">' .
            '<h3 class="panel-title">Posted by:'.$_GET['user'].'</h3>' .
            '</div>' .
            '<div class="panel-body"> '.
            $_GET['feedback'].'<br>' .
            '</div>' .
            '</div>' .
            '</div><!-- /.col-sm-4 --></br>';
    }
    else{
        echo '<div class="col-sm-4">' .
            '<div class="panel panel-primary">' .
            '<div class="panel-heading">' .
            '<h3 class="panel-title">Error: No Student Number Found</h3>' .
            '</div>' .
            '<div class="panel-body"> 
             Please Enter Student Number and make sure there is some text in the text area<br>' .
            '</div>' .
            '</div>' .
            '</div><!-- /.col-sm-4 --></br>';
    }
}
else{
    echo '<div class="col-sm-4">' .
        '<div class="panel panel-primary">' .
        '<div class="panel-heading">' .
        '<h3 class="panel-title">Posted by: No one apparently</h3>' .
        '</div>' .
        '<div class="panel-body">
    Nothing recorded by the post method<br>' .
        '</div>' .
        '</div>' .
        '</div><!-- /.col-sm-4 --></br>';
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="theme.css">-->
<table cellpadding="200" align="center">
    <tbody>
        <tr>
            <td style="height: 100%; width: 100%;">
                <form method="POST" id="login-opt" action="insert_sitepost.php">
                    <table cellpadding="10" cellspacing="2">
                        <tr>
                            <td><strong id="creds">Student Number:</strong></td>
                            <td><input type="text" name="user" placeholder="<?php echo 'Student Number' ?>"></td>
                        </tr>
                        <tr>
                            <td><strong id="creds">Password:</strong></td>
                            <td><input type="password" name="pass" placeholder="<?php echo 'password' ?>"</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" class="btn btn-success"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </tbody>
</table>

<?php

$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

if (isset($_POST['submit'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql2 = "INSERT INTO user (student_no,password,name,surname,email,status) VALUES (".$username.",".$password.",'Sibuliso','Vilakazi','svnet@gmail.com','offline');";

    if ($con->query($sql2) == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $con->error;
    }
//
//    $sql3 = "SELECT * FROM user WHERE student_no = ".$username." and password = ".$password.";";
//    $result = $con->query($sql3);
//
//    if ($result->num_rows > 0) {
//        header('Location: logged.php');
//        echo '========================================================' . '<br>';
//        while($row = $result->fetch_assoc()) {
//            echo 'Student Number: '.$row['student_no'].'<br> Name: '.$row['name'].'<br>Surname: '.$row['surname'];
//        }
//    }
//    else
//        echo "Invalid credentials please try again";
}
$con->close();
?>