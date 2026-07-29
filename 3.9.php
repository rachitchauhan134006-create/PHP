<?php
// If form is submitted
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Save username and password in cookies for 7 days
    setcookie("username", $username, time() + (7 * 24 * 60 * 60), "/");
    setcookie("password", $password, time() + (7 * 24 * 60 * 60), "/");

    echo "<h3>Login Successful!</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username"
        value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required>
    <br><br>

    Password:
    <input type="password" name="password"
        value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" required>
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

</body>
</html>