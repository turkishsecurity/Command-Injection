<!DOCTYPE html>
<html>
<head>
	<title>Command Injection</title>
</head>
<body>
<center>
	<h1>command injection + xss xale</h1>
	<form action="command.php" method="POST">
		<input type="text" name="veri">
		<input type="submit" name="gonder">
	</form>
<?php
error_reporting(0);
$veri = $_POST['veri'];
echo `echo $veri`;
?>
</center>
</body>
</html>
