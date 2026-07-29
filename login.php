<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="123")
    {
        $_SESSION['user']=$username;
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">

Username :
<input type="text" name="username" required>

<br><br>

Password :
<input type="password" name="password" required>

<br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>