<?php
if(isset($_POST["save"]))
{
    $name = $_POST["name"];

    setcookie("username", $name, time()+86400, "/");

    header("Location: cookie_user.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Program</title>
</head>
<body>

<?php

if(isset($_COOKIE["username"]))
{
    echo "<h2>Welcome Back, ".$_COOKIE["username"]."</h2>";
    echo "<p>You are a repeated user.</p>";

    echo "<a href='delete_cookie.php'>Delete Cookie</a>";
}
else
{
?>

<h2>New User</h2>

<form method="post">

Enter Name :
<input type="text" name="name" required>

<br><br>

<input type="submit" name="save" value="Save">

</form>

<?php
}
?>

</body>
</html>