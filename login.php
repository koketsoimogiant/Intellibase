<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "GET") {
    // username and password sent from form

    $myusername = "";
    $mypassword = "";

    if (isset($_GET['username']))
    {
        $myusername = mysqli_real_escape_string($db,$_GET['username']);
        $mypassword = mysqli_real_escape_string($db,$_GET['password']);

        if(($myusername == null) || $mypassword == null){
            $error = "please enter your credentials to continue";
        }
    }



    $sql = "SELECT credsid FROM creds WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
    //  session_register("myusername");
        $_SESSION['login_user'] = $myusername;
        header("location: admin.php");
    }else if(($count == 0) && (isset($_GET['submit']))) {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<html>

<head>
    <title>Login Page</title>

    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            overflow: hidden;
        }

        label {
            font-weight:bold;
            width:150px;
            font-size:14px;
        }

        .box {
            border: #666666 solid 1px;
        }

        #loger:hover{
            box-shadow: 0 0 10px 10px #159;
            size: 3em;
        }

        #btn {
            background: linear-gradient(#252525,#242424,#252525);
            margin: 5px 10px;
            padding: 5px;
            color: white;
            border-radius: 4px;
        }
        #btn:hover {
            background: #fff;
            color: black;

        }
    </style>
    <link rel="stylesheet" href="theme.css">

</head>

<body>

<table cellpadding="20" style="height: 100%; width: 100%;">
    <tbody>
        <tr>
            <td width="100%" height="100%">
                <div align = "center">
                    <div id="loger" style = "-webkit-transition: ease-in 1s; -moz-transition: ease-in 1s; transition: ease-in 1s; background-color: #252525; color:#FFFFFF;width:300px; border: solid 1px #158; " align = "left">
                        <div style = "background-color:#158; color:#FFFFFF; text-align: center; padding:3px;"><b>Login</b></div>

                        <div style = "margin:30px">

                            <form method = "GET">
                                <label>UserName  :<input type = "text" name = "username" class = "box"/></label><br /><br />
                                <label>Password  :<input type = "password" name = "password" class = "box" /></label><br/><br />
                                <input id="btn" type = "submit" value = " Submit "/>
                                <input id="btn" type="button" onclick="document.location.href='index.php'" value = "Back to Home"/><br/>
                            </form>

                            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

                        </div>

                    </div>

                </div>
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>