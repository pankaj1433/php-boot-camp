<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "hello";
$a=5;
$b=3;
//echo $a $b;
if($a > $b):
    echo $a." is greater than ".$b;
elseif($a == $b): // Will not compile.
    echo "The above line causes a parse error.";
/*else:
    echo $a." is neither greater than or equal to ".$b;*/
endif;
?>
</body>
</html>