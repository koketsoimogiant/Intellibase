<?php
include('session.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->
    <meta name="Intellibase" content="width=device-width, initial-scale=1">
    <meta name="Koketso" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/intellibase.jpg">
    <link rel="stylesheet" href="theme.css">
    <title>Intellibase Inc. | AdminX </title>
    <style type="text/css">
        body{
            background-color: #158;
            color: white;
        }

        .block {
            height: 66px;
            width: 66px;
            margin: 3em;
            padding: 5em;
            text-align: center;
            float: left;
            line-height: 33px;
            background: linear-gradient(#d8d8d8, white, #d8d8d8);
            border-radius: 10px;
            box-shadow: 0 0 5px 5px grey;
        }

        .block:hover {
            filter: alpha(80);
            opacity: 0.8;
        }

        .block:visited {
            filter: alpha(95);
            opacity: 0.95;
        }

        #container {
            height: auto;
            width: auto;
            background: linear-gradient(#242424, #252525);
            margin: 10px auto;
            border: 1px groove white;
            border-radius: 5px;
            box-shadow: 0 0 5px 5px grey;
        }

        a {
            text-decoration: none;
            color: #ff4500;
        }

        .user-info{
            border: 1px solid crimson;
            -webkit-box-shadow: 0 0 5px 5px crimson inset;
            -moz-box-shadow: 0 0 5px 5px crimson inset;
            box-shadow: 0 0 5px 5px crimson inset;
            max-width: 50%;
            margin: 3em auto;
            padding: 3em 10px;
            text-align: center;
        }
    </style>
</head>
<body>
	<div id="container">
		<div class="jumbotron text-center">
			<h1>Intellibase Inc.</h1>
			<p>Think Creative Be Innovative</p>
		</div>

        <div class="user-info">
            <h1>Welcome To AdminX</h1>
            <pre>you're an admin enjoy the power</pre>
            <?php
                echo
                '<div>' .
                    '<h1>User: '.$session_names.'</h1><hr>' .
                    '<p>Username: '.$session_user.'</p><hr>' .
                    '<p>Number: '.$session_number.'</p><hr>' .
                    '<p>Role: '.$session_role.'</p><hr>'.
                '</div>';

            if(!isset($_SESSION['login_user'])){
                header("location:login.php");
            }
            ?>
        </div><br/><br/>

		<a class="block" href="announce.php"><h2>Announce</h2></a>

		<a class="block" href="update.php"><h2>Update</h2></a>

		<a class="block" href="test.php"><h2>View</h2></a>

		<a class="block" href="settings.php"><h2>Settings</h2></a>

		<a class="block" href="logout.php"><h2>Logout</h2></a>

        <div id="footer" style="clear: both; position:relative; bottom: 0;">
            <p style="text-align: center;">Intellibase Inc. &copy; copyright 2017.</p>
        </div>
    </div>
</body>
</html>
