<?php
$conn = mysqli_connect("localhost","root","","productdb");

if(!$conn)
{
    die("Connection Failed");
}

$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>Product Details</title>
</head>

<body>

<h2>Product Details</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Type</th>
    <th>Image</th>
    <th>Quantity</th>
</tr>

<?php

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['product_type']; ?></td>
    <td>
        <img src="uploads/<?php echo $row['product_image']; ?>" width="80" height="80">
    </td>
    <td><?php echo $row['product_qty']; ?></td>
</tr>

<?php
    }
}
else
{
    echo "<tr><td colspan='6'>No Product Found</td></tr>";
}

mysqli_close($conn);

?>

</table>

</body>
</html>