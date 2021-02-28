
<?php

$fullarray = array('a'=>2,'b'=>4,'c'=>2,'d'=>5,'e'=>6,'f'=>2);


function filterArray($value){
    return ($value == 2);
}

$filteredArray = array_filter($fullarray, 'filterArray');
$newarray = array();
foreach($filteredArray as $k => $v){
    $newarray[]=$v;
}
print_r($newarray);
?>