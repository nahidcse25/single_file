<?php

$array1 = Array	('userid','int(11)','user_id','varchar(500)','user_pass','varchar(500)','address','varchar(500)',	 'email','varchar(500)','user_level','varchar(500)','phone','varchar(500)','user_name','varchar(500)',
	   'insert_date','date','update_date', 'date','working_date','date','sales_office_id','int(11)', 'dis_cen_id','int(11)','voucher_upadte','varchar(10)'
	);
$array2 = Array('userid','int(11)','user_id','varchar(500)','user_pass','varchar(500)','address','varchar(500)',	 'email','varchar(500)','user_level','varchar(500)','phone','varchar(500)','user_name','varchar(500)',
	   'insert_date','date','update_date', 'date','working_date','date','sales_office_id','int(11)', 'dis_cen_id','int(11)','voucher_upadte','varchar(10)'
	);
echo '<pre>';
//var_dump(array_intersect($array1, $array2));

//$a=array("a"=>'user',"b"=>'int(11)',"c"=>'id');
//echo array_sum($a);
$value2= array('gh','jjj','ghs');

echo "Sum of values = ".array_sum($value2); 

?>