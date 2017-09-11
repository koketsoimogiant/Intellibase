<html>
<head>
    <title>Make an announcement</title>
    <link rel="stylesheet" href="theme.css">
    <style>
        body{
            color: white;
        }
    </style>
</head>
<body>
<?php
include 'connect.php';

$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

$sql = "SELECT * FROM sitepost ORDER BY date_time;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table align='center' border='1' cellpadding='20' cellspacing='0'>".
        "<thead>".
        "<tr>".
        "<th>#</th><th>Student Number</th><th>User Post</th><th>Date</th><th>Action</th>".
        "</tr>".
        "</thead><tbody>";


    while($row = $result->fetch_assoc()) {
        $id = $row["sitepost_id"];
        echo '<tr id="row">
                    <td id="1">'.$row["sitepost_id"].'</td>
                    <td id="2">'.$row["student_no"].'</td>
                    <td id="3">'.$row["post"].'</td>
                    <td id="4">'.$row["date_time"].'</td>';?>
        <td id="button"><a id="button" href="update_sitepost.php?id" style="background-color: lightgreen; color: white; border: 1px solid white;
                    padding: 4px 15px; text-decoration: none; border-radius: 5px;" name="edit" >UPDATE</a></td>
        <?php
        echo '</tr>'.
            '</tbody>'?>
        <?php
    }
} else {
    echo "0 results";
}
echo '</table>';
$con->close();
?>
<div id="inputarea">
    <form method="GET" id="login-opt" action="update_sitepost.php">
        <table cellpadding="10" cellspacing="2">
            <tr>
<!--                <td><strong id="creds">Student Number:</strong></td>-->
<!--                <td><input id="user" type="text" name="user" placeholder="--><?php //echo 'Student Number' ?><!--"></td>-->
            </tr>
            <tr>
                <td><strong id="creds">Your feedback:</strong></td>
                <td><textarea name="feedback" id="feedback" cols="150" rows="10" placeholder="<?php echo 'Please type the change you want to make and select update on the row you wish to update.' ?>"></textarea></td>
            </tr>
            <tr>
<!--                <td>&nbsp;</td>-->
<!--                <td><input type="submit" value="Post" class="btn btn-success"></td>-->
            </tr>
        </table>
    </form>
</div>


<!-- Placed at the end of the document so the pages load faster -->
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var button = $("#button");
        var row = button.parent().siblings();
        var student = row.eq(1).text();
        var post = row.eq(2).text();

        button.click(function () {
            document.location.href="update.php?pid=<?php echo $id; ?>";
            alert(student + ": " + post);


//            $("#user").val(student);
//            $("#feedback").val(post);
        });
    });
</script>
</body>
</html>