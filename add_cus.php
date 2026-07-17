<?php

$conn = mysqli_connect("localhost","root","","productdb");

if(!$conn)
{
    die("Connection Failed");
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customer(name,email,phone)
            VALUES('$name','$email','$phone')";

    if(mysqli_query($conn,$sql))
    {
        echo "Customer Added Successfully";
    }
    else
    {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Form</title>
</head>
<body>

<h2>Customer Form</h2>

<form method="POST">

    Name :
    <input type="text" name="name" required>
    <br><br>

    Email :
    <input type="email" name="email" required>
    <br><br>

    Phone :
    <input type="text" name="phone" required>
    <br><br>

    <input type="submit" name="save" value="Add Customer">

</form>

</body>
</html>