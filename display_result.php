<?php
$conn = mysqli_connect("localhost", "root", "", "productdb");

if (!$conn)
{
    die("Connection Failed");
}

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>

<h2>Customer Details</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
</tr>

<?php

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "</tr>";
    }
}
else
{
    echo "<tr><td colspan='4'>No Record Found</td></tr>";
}

mysqli_close($conn);

?>

</table>

</body>
</html>