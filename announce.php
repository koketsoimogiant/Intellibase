<html>
<head>
    <title>Make an announcement</title>
    <link rel="stylesheet" href="theme.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <style>
        body{
            background: linear-gradient(#252525,#242424,#252525);
            color: white;
            width: 100%;
        }
        .table-bordered tr:hover {
            color: #000;
        }

        #inputarea tr{
            color: #000;
        }
        thead:hover {
            background: #158;
            color: #fff;
        }
        #login-opt {
            margin: 0;
        }
    </style>
</head>
<body>
<?php
include "session.php";
include 'connect.php';

$con = new mysqli($host, $user, $password, $dbname, $port)
or die ('Could not connect to the database server' . mysqli_connect_error());

$sql = "SELECT * FROM sitepost ORDER BY date_time;";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table align='center' class='table table-bordered table-hover table-condensed'>".
        "<thead>".
        "<tr>".
        "<th>#</th><th>Student Number</th><th>User Post</th><th>Date</th><th>Action</th>".
        "</tr>".
        "</thead>";


    while($row = $result->fetch_assoc()) {
        $id = $row["sitepost_id"];
        echo '<tbody>
                <tr>
                    <td>'.$row["sitepost_id"].'</td>
                    <td>'.$row["student_no"].'</td>
                    <td>'.$row["post"].'</td>
                    <td>'.$row["date_time"].'</td>';?>
        <td><a href="delete_announcement.php?id=<?php echo $id; ?>&from=announce" style="background-color: red; color: white; border: 1px solid white;
                    padding: 4px 10px; text-decoration: none; border-radius: 5px;" name="delete">DELETE</a></td>
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
<div class="container">

</div>
<div id="inputarea">
    <form method="GET" id="login-opt" action="insert_sitepost.php">
        <table cellpadding="10" cellspacing="2" style="padding: 10px;">
            <tr>
                <td><strong id="creds">Student Number:</strong></td>
                <td><input type="text" name="user" placeholder="<?php echo 'Please enter Student Number' ?>" style="width: 50%;"></td>
            </tr>
            <tr>
                <td><strong id="creds">Announcement:</strong></td>
                <td><textarea name="feedback" id="feedback" cols="150" rows="10" placeholder="<?php echo 'Write or even code(html/css) the announcement right here, be creative' ?>"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Announce" class="btn btn-success"> &nbsp; <input type="button" onclick="document.location.href='admin.php'" value="Go back to Admin" class="btn btn-danger"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>