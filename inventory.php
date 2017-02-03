<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM apps ORDER BY name";
	$socks = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Applify Apps </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Applify Apps</h1>

<p class="middle"><a href="enter_new_record.php">Add an app!</a></p>

<table>
    <tr>
        <th>Name</th>
        <th>Platform</th>
        <th>Price</th>
        <th>Category</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($socks)) :  ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['platform']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['category']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

</div> <!-- close container -->
</body>
</html>
