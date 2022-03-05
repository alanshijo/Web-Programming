<?php
$names = array(array('name1'=>'Mark','age'=>'32'),array('name2'=>'Aby','age'=>'44'),array('name3'=>'Abhishek','age'=>'15'),array('name4'=>'Don','age'=>'21'));
print_r($names);echo '<br><br>';
asort($names); 	
print_r($names);
arsort($names);echo '<br><br>';
echo '$names[0][0]';
?>
