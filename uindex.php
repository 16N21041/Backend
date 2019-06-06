<?php
    session_start();
    $error="";
    require_once "connection1.php";
    if(isset($_POST['submit'])){
        $email = stripslashes(mysqli_real_escape_string($conn, $_POST['email']));
        $password = stripslashes(mysqli_real_escape_string($conn, $_POST['password']));
        if(isset($email) && !empty($email) AND isset($password) && !empty($password)){
            $sql = "select * from `t1` where `email`='$email' and `password`='$password'";
            if($conn->query($sql)==true){
                $res = $conn->query($sql);
                if($res->num_rows > 0){
                    $_SESSION['email']=$email;
                    header("location:profile.php");
                }else{
                     $error = "Invalid email or password :(";
                }
            }else{
                echo "Query Error";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        form{
            left: 50%;
            top: 50%;
            transform:translate(-50%, -50%);
            position: absolute;
            box-shadow: 0 5px 10px #ddd;
        }
        input[type='email'],input[type="password"]{
            border: none;
            margin-bottom:15px;
            border-bottom: 2px solid #ddd;
        }
        input[type="submit"]{
            border: none;
            margin-top: none;
            height: 20px;
            cursor: pointer;
            border-radius: 20px;
            background-color: #ddd;
        }
        input[type="submit"]:hover{
            background-color: #bbb;
            transition: background-color .5s;
        }
        #error{
            color: red;
        }
        header{
            height: 100px;
            width: 100%;
            top: 0;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            background-color: black;
        }
        a{
            text-decoration: none;
            color: white;
            float: right;
            margin-right: 20px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h3><a href="index.php">Admin_Login</a></h3>
    </header>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>User Login</legend><br>
            E-Mail: <br>
            <input style="width: 200px; height: 20px;" type="email" name="email" placeholder="Enter email" required><br>
            Password: <br>
            <input style="width: 200px; height: 20px;" type="password" name="password" placeholder="Enter password" required><br>
            <input style="width: 200px;" type="submit" name="submit" value="Submit"><br>
            <center><span id="error"><?php echo $error;?></span></center>
        </fieldset>
    </form>
</body>
</html>