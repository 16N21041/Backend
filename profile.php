<?php
    include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome <?php echo $login_session;?></title>
    <style>
        header{
            height: 100px;
            background-color: black;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        a{
            text-decoration: none;
            color: white;
            float: right;
            margin-right: 20px;
            margin-top: 50px;
        }
        h2{
            text-decoration: none;
            color: white;
            float: left;
            margin-right: 20px;
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <header>
        <h2><span style="font-size: 20px;">Hello</span>  <?php echo $login_session;?></h2>
        <h3 style="color:white;"><a href="logout.php">Logout</a></h3>
    </header>
</body>
</html>