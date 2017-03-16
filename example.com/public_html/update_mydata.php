<?php

$db= new PDO("mysql:host=localhost;dbname=sample","root","abcde");
//$id = mysql_real_escape_string(htmlentities($_POST['id']));
$n="anchal";
$s="1000";
$m="999144672";
$e="pankaj@123.com";
$id = $_POST['id'];
$i=substr($id, 0,1);
$chk=substr($id,1,2);
if($chk=="u")
{

    $query = $db->prepare("UPDATE mydata SET name='$n',salary='$s',phone='$m',email='$e' WHERE id='$i'");
    $query->execute();
    echo "Hello from ajax:".$i." ".$query->rowCount();
    //header('Location:pdo1.php');
}
else
{
    $query = $db->prepare("DELETE from mydata WHERE id='$i'");
    $query->execute();
    //echo "deleted";
    echo $i;
}



    //echo $chk;
        // Check connection
       /* if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

      $header = mysql_real_escape_string(htmlentities($_POST['header']));
      $content = mysql_real_escape_string(nl2br(htmlentities($_POST['content'])));

      $sql = mysqli_query($con,"INSERT INTO posts (Header, Content) VALUES 
        ('{$header}','{$content}')");
          mysqli_close($con);*/
?>