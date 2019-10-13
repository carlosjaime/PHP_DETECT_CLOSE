<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>

<form method="POST" action="login.php">
	Enter Username : <input type="text" name="uname"><br><br>
	Enter Password : <input type="password" name="password"><br><br>
	<input type="submit" value="Login">
	<a href=""><input type="button" value="Create"></a>
	<a href=""><input type="button" value="Forgot Password"></a>
</form>

</body>
</html>
<?php
session_destroy();
?>