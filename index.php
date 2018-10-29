<html>
<body>

<?php

$urlError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$url = test_input($_POST["url"]);
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;	
}
?>

<h2>Sputnik Digital Form Technical Test - Enter URL below</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
URL of Website: <input type="text" name="url">
<input type="submit">
</form>

<?php
echo "<h2>URL entered:</h2>";
echo $url;
?>

</body>
</html>