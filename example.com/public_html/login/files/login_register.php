<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
	<title>resigter</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
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
	.usertext{
		border: 1px solid;

	}
	.alert1  {
    padding: 1px;
    background-color: #598fc5;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
	}
	.alert2  {
    padding: 1px;
    background-color: #598fc5;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
	}
</style>
</head>
<body>
<?php 
if($_SESSION['user']){

	$name=$_SESSION["user"];
	$password=$_SESSION["pass"];
	$id=$_SESSION["userid"];
	$M=$_GET['M'];
?>
<div class="form">
	<h3>Update Details</h3>
<form name="loginform" method="post" action="update_login.php" onsubmit="return confirm_password();">
	HELLO <?php echo $name ?><br><span style="color: blue"><?php echo $M ?></span><br>
	current password:<input type="password" id="oldpass" name="oldpassword" placeholder="Old Password" ><br>
	<span id="old" style="color: red"></span><br>
	New password:<input type="password" name="newpassword" id="newpassword" placeholder="New Password" ><br><br>
	Confirm password:<input type="password" id="confirmpassword" placeholder="Confirm New Password" ><br>
	<span id="conf" style="color: red"></span><br>
	<input type="submit" name="Update" value="update">
</form><br>
<form><input type="submit" name="logout" value="logout" formaction="logout.php"></form>
</div>
<?php } 
else{
	$M=$_GET['M'];

?>

<div class="form">
	<div id="alerts1" class="alert1" style="display: none">
			<p> Username should contain at least 3 chracters</p>
			<p>Username should contain at most 15  characters</p>
			<p>User name can contain numbers,characters</p>
	</div>
		<div id="alerts2" class="alert2" style="display: none"><p>password should contain at least 8 characters </p></div>
	<h3>Registration Form</h3>
<form name="registerform" method="post" action="resgister_login.php" id="registerform" onsubmit="return check_username();"><br>
<span style="color: red"><?php echo $M ?></span><br><br>
Username: <input type="text" name="name" id="name_l" placeholder="name"><br>
<span style="color:red" id="msg"></span><br>
Password:<input type="password" name="password" id="pass_l" placeholder="password"><br><br>
<input type="submit" id="btn" name="Register" value="Resigter">
<br><br><span>Already a user! <a href="login.php">click here to login</a></span><br>

<?php } ?>



</form>
<div>
</body>

<script type="text/javascript">
var validateName=true;
var usernameRegex = new RegExp("^[a-z0-9]{3,15}$");
var passwordRegex=new RegExp("^.{8,100}$");
	$('#name_l').focus(function(){
			$('#alerts1').css({"display":"block"});
			$('#alerts2').css({"display":"none"});
	});
	$('#pass_l').focus(function(){
			if(!usernameRegex.test(($('#name_l').val()))){
				$('#alerts1').css({"background-color":"#f44336"});
				$('#name_l').css("border-color","#f44336");
				$('#alerts2').css({"display":"block"});
			}
			else{
				$('#name_l').css("border-color","#598fc5");
				$('#alerts2').css({"display":"block"});
				$('#alerts1').css({"display":"none"});
			}
	});
	$('#btn').focus(function(){
			if(!passwordRegex.test(($('#pass_l').val()))){
				$('#alerts2').css({"background-color":"#f44336"});
				$('#pass_l').css("border-color","#f44336");
		}
		else{
			$('#alerts2').css({"display":"none"});
			$('#pass_l').css("border-color","#598fc5");
		}
	});



function confirm_password(){
	var success = true;
	var user_pass=document.getElementById('oldpass').value;
	$.ajax({
  			url:'check_password.php',
  			type:'POST',
  			async: false,
  			data:"user_pass="+user_pass,
  			success:function(data){
  				console.log(data);
  				if(data==1){
  					success = false;
  					console.log(success);
					$('#old').css('color','red');
  					$('#old').html("incorrect password");
  				}

				else{
					$('#old').html("correct password");
					$('#old').css('color','green');
				}
			}
	});
	if(($('#newpassword').val())!=""){ 
		if(($('#newpassword').val())!=($('#confirmpassword').val())){
			$('#conf').html("password does not match");
			success=false;
		}
		else{
			$('#conf').html("password match");
			$('#conf').css('color','green');
		}
	}
	else{
		$('#conf').html("required");
		success=false;
	}
	return success;
}


function check_username(){
var chk_name=document.getElementById('name_l').value;
var chk_pass=document.getElementById('pass_l').value;
var dataString="name="+chk_name+"&pass="+chk_pass;
var succeed = true;
	$.ajax({
  			url:'check_username.php',
  			type:'POST',
  			async: false,
  			data:dataString,
  			success:function(data){
  				if(data==1){
  					succeed = false;
  					$('#msg').html("username not available");
  				}
			}
});
	return succeed;
}	
</script>

</html>