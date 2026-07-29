<?php
$conn = mysqli_connect("localhost","root","","college");

if(!$conn)
{
    die("Connection Failed");
}

// Insert Data
if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(name,email,password)
          VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Registration Successful');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>

<h2>User Registration</h2>

<form method="post">

Name :
<input type="text" name="name" required>

<br><br>

Email :
<input type="email" name="email" required>

<br><br>

Password :
<input type="password" name="password" required>

<br><br>

<input type="submit" name="register" value="Register">

</form>

<hr>

<h2>Registered Users</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
<th>Date & Time</th>
</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['created_at']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>