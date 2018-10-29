<html>
<body>
<?php
$urlError = "";

if (empty($_POST["url"])) {
	$urlError = "Website URL is required";
} else {
	URL entered was: <?php echo $_POST["url"]; ?>
}

?>
</body>
</html>