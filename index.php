<html>
<body>

<?php
$url = "";
$urlError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["url"])) {
	$url = "";
	} else {
	$url = test_input($_POST["url"]);
	    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
		$urlError = "URL isn't valid. Please enter a valid one";	
  }
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;	
}

}
?>

<h2>Sputnik Digital Form Technical Test - Enter URL below</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
URL of Website: <input type="text" name="url">
<span class="error"><?php echo $urlError;?></span>
<input type="submit">
</form>

<?php
echo "<h2>URL entered:</h2>";
echo $url;
?>

</body>
</html>