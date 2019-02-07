<?php

$a = 1;
$b = "BEHZOD";
$c = true;
$f = 1.1;
$arr = [];
$object = new stdClass();
for ($t = 0; $t < 100; $t+=2){
    $arr[] = $t * 2;
}
echo '<pre>';
print_r($arr);
echo '</pre>';

foreach ($arr as $key => $value) {
    if ($key > 0 && $key % 2 ==0){
    echo '$key[' . $key . '] = $value[' .$value . ']<br/>';
    }
    if ($key == 10){
        break;
        echo "Behruz";
    }
}   
$k = 0;
while ($k<100){
    echo "Value $k is " . $k . '</br>';
    $k++;
}
$a = 10;
switch ($a) {
    case $a<10:
        # code...
        break;
    
    default:
        # code...
        break;
}
$name = "BEha";
$last_name = "Shodi";
$full_name = '$name $last_name';
echo $full_name;

$object->name  = 'Behzod';
echo $object->name;
