<?php
error_reporting(1);
ini_set('display_error', 1);
//mysqli_connect();

$con=mysqli_connect("localhost","root","abcde","sample");
print_r($con);exit;
if($con)
{
	//print_r($con);
$result=mysqli_query($con,"select * from table1");

echo mysqli_num_rows($result);

} else {
	echo mysqli_connect_error();
}

while ($data=mysqli_fetch_object($result) ) {
	# code...
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	echo $data->id;
}


?>