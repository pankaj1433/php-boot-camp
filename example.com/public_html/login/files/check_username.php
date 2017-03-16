<?php 

$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
$name=$_POST['name'];
$flag=0;

$check_query=$db->query("select name from login");
while($row = $check_query->fetch(PDO::FETCH_ASSOC))
{
    if($row['name']==$name)
    {
		$flag=1;
		break;
	}
}
echo $flag;



?>