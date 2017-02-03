<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Applify App Form </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/simple.js"></script>
</head>

<body>
<div id="container">

<h1>Applify</h1>

<div id="socks">

<form id="sockform" method="post" action="simple_form.php" autocomplete="off">
    <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>

    <label for="style">Style </label>
    <select name="style" id="style" required>
        <option value=""></option>
        <option value="ankle">ankle</option>
        <option value="knee-high">knee-high</option>
        <option value="mini">mini</option>
        <option value="other">other</option>
    </select>

    <label for="color">Color </label>
	<input type="text" name="color" id="color" maxlength="20" required>

    <label for="quantity">Quantity </label>
	<input type="number" name="quantity" id="quantity" max="999" required>

    <label for="price">Unit Price </label>
	<input type="number" name="price" id="price" max="99.99" step="0.01" required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>

</div>

</div> <!-- close container -->
</body>
</html>
