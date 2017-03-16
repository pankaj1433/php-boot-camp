<!DOCTYPE html>
<html>
<head>
	<title>mydata</title>
	<style type="text/css">
		.wi{
			width: 60px;
		}
	</style>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script type="text/javascript">
	function confSubmit() {
	      var r=confirm('Are you sure you want to delete??');
	      return r;
	   }
	</script>
	
</head>
<body>
<?php
$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
?>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
		<th>id</th>
		<th>name</th>
		<th>salary</th>
		<th>mobile</th>
		<th>email</th>
		<th colspan="2">action</th>
	</thead>
	<?php
	$query = "SELECT * FROM mydata"	;
	$result = $db->query($query);
	while($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>";
    echo "<td>".$row->id."</td>";
    echo "<td><input type='text' disabled='true' id='".$row->id."name' value='".$row->name."'></td>";
    echo "<td><input type='text' disabled='true' id='".$row->id."sal' value='".$row->salary."'></td>";
    echo "<td><input type='text' disabled='true' id='".$row->id."phone' value='".$row->phone."'></td>";
    echo "<td><input type='text'  disabled='true' id='".$row->id."email' value='".$row->email."'></td>";
    echo "<td><input type='submit' id='".$row->id."d' name='submit' value='delete' onclick='sendData()'></td>";
    echo "<td>";
    echo "<input type='button' id='".$row->id."u' name='submit' value='update' onclick='sendData()' class='wi' style='display:none'>";
    echo "<input type='button' id='".$row->id."e' name='submit' value='Edit' class='wi' onclick='editData()'>";
    echo "</td>";
    echo "</tr>";
	}

?>
</table>
</form>
</body>
<script>
	function editData(){
		//alert("hello");
		var id=window.event.target.id;
		console.log(id);
		var update_id=id.substring(0, 1)+"u";
		var name_id=id.substring(0, 1)+"name";
		var sal_id=id.substring(0, 1)+"sal";
		var phone_id=id.substring(0, 1)+"phone";
		var email_id=id.substring(0, 1)+"email";
		//console.log(update_id);
		document.getElementById(update_id).setAttribute("style",'display:inherit');
		document.getElementById(id).setAttribute("style",'display:none');
		document.getElementById(name_id).disabled = false;
		document.getElementById(sal_id).disabled = false;
		document.getElementById(phone_id).disabled = false;
		document.getElementById(email_id).disabled = false;

	}


    function sendData() {
    	//alert(window.event.target.id);
    	var id=window.event.target.id;
    	//var id = $('.header_input').val();
    	var dataString = 'id='+id;
    $.ajax({
        type: 'POST',
        url: 'update_mydata.php',
        data: dataString,
        success: function(data) {
          alert(data);
        } 
           });
    	//location.reload('pdo1.php');
        }

    </script>
</html>