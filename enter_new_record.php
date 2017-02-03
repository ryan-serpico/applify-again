<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Applify - Enter </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Applify: Enter New Apps</h1>

<p class="middle"><a href="inventory.php">View full inventory</a></p>

<div id="socks">

<form id="sockform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>

    <label for="platform">Platform </label>
    <select name="platform" id="platform" required>
        <option value=""></option>
        <option value="iOS">iOS</option>
        <option value="Android">Android</option>
        <option value="Windows">Windows</option>
        <option value="Mac">Mac</option>
        <option value="other">other</option>
    </select>

    <label for="category">Category </label>
    <select name="category" id="category" required>
        <option value=""></option>
        <option value="Books">Books</option>
        <option value="Business">Business</option>
        <option value="Catalogs">Catalogs</option>
        <option value="Education">Education</option>
        <option value="Entertainment">Entertainment</option>
        <option value="Finance">Finance</option>
        <option value="Food">Food</option>
        <option value="Games">Games</option>
        <option value="Health">Health</option>
        <option value="Kids">Kids</option>
        <option value="Lifestyle">Lifestyle</option>
        <option value="Newspapers">Newspapers</option>
        <option value="Medical">Medical</option>
        <option value="Muisc">Music</option>
        <option value="Navigation">Navigation</option>
        <option value="News">News</option>
        <option value="Photo">Photo</option>
        <option value="Productivity">Productivity</option>
        <option value="Reference">Reference</option>
        <option value="Shopping">Shopping</option>
        <option value="Social Networking">Social Networking</option>
        <option value="Sports">Sports</option>
        <option value="Travel">Travel</option>
        <option value="Utlities">Utilities</option>
        <option value="Weather">Weather</option>

    </select>


    <label for="price">Price </label>
	<input type="number" name="price" id="price" placeholder="If free with in-app purchase, enter freemium." required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
