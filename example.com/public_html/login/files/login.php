<?php
session_start();
if($_SESSION["user"])
header("Location: login_register.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<style type="text/css">
	.form{
		border: 3px solid black;
		margin-left: 400px;
		margin-top: 50px;
		margin-right: 400px;
		align-content: center;
		padding: 50px;
		text-align: center;

	}
</style>
<body>
<?php $msg=$_GET['valid']; ?>

<div class="form">
<h3>Login Form</h3>
	<form name="loginform" method="post" action="login_handel.php">
		Username:<input type="text" name="name" placeholder="name"><br><br>
		Password:<input type="password" name="password" placeholder="password"><br><br>
		<span style="color:red"><?php echo $msg; ?></span><br>
		<input type="submit" name="login" value="Login">
	</form>
	<br><span>not a user! <a href="login_register.php">click here to register</a></span><br>

</div>
</body>
</html>