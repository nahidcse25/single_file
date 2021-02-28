<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	try {
		$db = new PDO("mysql:host={$dbhost};}",$dbuser,$dbpass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo "Connection error: ".$e->getMessage();
	}
	$sql = "SHOW COLUMNS FROM admin_user_info FROM acc_battery_palton_16";
	$statement = $db->prepare($sql);
	$statement->execute();
	$column_match_2 = $statement->fetchAll(PDO::FETCH_ASSOC);
	//echo '<pre>';
	//print_r($column_match_2);die;
	$concat_field = array();
	$column_match = array();
	foreach ($column_match_2 as $value) {
		$concat_field[] = $value['Field'].'-'.$value['Type'];
		if(is_array($concat_field)){
			foreach ($concat_field as $val) {
				$column_match[]= $val;
	echo '<pre>';
	print_r($column_match);
			}
		}
	}
?>