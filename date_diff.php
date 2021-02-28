
<?php
$datetime1 = new DateTime('2010-02-01');
$datetime2 = new DateTime('2016-10-31');
$interval = $datetime1->diff($datetime2);
print_r($interval);
$datetime3 = date_create('2010-02-01');
$datetime4 = date_create('2016-10-31');
$interval = date_diff($datetime3, $datetime4);
echo $interval->format('%R%a days');
$result = array(2464);

$sub_struct_month = ($result[0] / 30) ;
$sub_struct_month = floor($sub_struct_month); 
$sub_struct_days = ($result[0] % 30); // the rest of days
$sub_struct = $sub_struct_month."m ".$sub_struct_days."d";

echo $sub_struct;
?>
