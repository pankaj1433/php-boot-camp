<?php
echo "<pre>";
$arr['first']=[7,8,9];
$arr+=['second'=>[4,5,6]];
print_r($arr);

if(is_array($arr))
	echo "true";
else
	echo "false";



if(count($arr)>0)
	echo "true";
else
	echo "false";

foreach ($arr as $key=>$value) {
	foreach ($value as $k) {
		echo $k."<br>";
	}
}
echo "______________________________________________________________<br>";
$arr1=['key1'=>'2','key2'=>'3'];

foreach ($arr1 as $key=>$value ) {
	echo $key." is ".$value."<br>";
}


$keys=array_keys($arr);
print_r($keys);

asort($arr);
print_r($arr);

echo "______________________________________________________________<br>";


$k=[1,2,3];
//$val=['one','two','three'];
$a='one';
$b='two';

print_r(compact(a,b,k));


$subject1 = 'Language';
$subject2 = 'Math';
$subject3 = 'Geography';
$subject_list = array('subject2','subject3');
$result = compact('subject1', $subject_list);
print_r($result);







echo "</pre>";

?>