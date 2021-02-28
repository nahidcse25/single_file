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
	$dbname_1 = 'acc_battery_palton_16';
	$statement = $db->prepare("SHOW TABLES FROM $dbname_1");
	$statement->execute();
	$result_1 = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result_1 as $value) {
		if(is_array($value)){
			foreach ($value as $val) {
				$db_1[]= $val;
			}
		}
	}
	$dbname_2 = 'acc_battery_palton_18';
	$statement = $db->prepare("SHOW TABLES FROM $dbname_2");
	$statement->execute();
	$result_2 = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result_2 as $value) {
		if(is_array($value)){
			foreach ($value as $val) {
				$db_2[]= $val;
			}
		}
	}  
	$db_2_miss = array_diff($db_1, $db_2);
	$db_2_extra = array_diff($db_2, $db_1);
	$common_table = array_intersect($db_1, $db_2);
	foreach ($common_table as $value) {
		$filter_table[]= $value;
	}
	if(!empty($filter_table)){
		//echo $filter_table[0];die;
		for($i=0;$i<count($filter_table);$i++){
			$sql = "SELECT COLUMN_NAME,COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname_1' AND TABLE_NAME = '$filter_table[1]' ";
			$statement = $db->prepare($sql);
			$statement->execute();
			$column_match_1 = $statement->fetchAll(PDO::FETCH_ASSOC);
			echo '<pre>';
			//print_r(count($column_match_1));die;
			for($j=0;$j<count($column_match_1);$j++){
				foreach ($column_match_1[0] as $value) {
					$col_arr[] = $value;
				echo '<pre>';
				print_r($col_arr);
				/*	if(is_array($value)){
						foreach ($value as $val) { 
							//$valu = implode("",$val);
							$column_match_with[]= $val;
						}
					}*/
				}
				//var_dump($column_match_1[]);die;
			}



			foreach ($column_match_1 as $value) {
				if(is_array($value)){
					foreach ($value as $val) { 
						//$valu = implode("",$val);
						$column_match_with[]= $val;
					}
				}
			}die;
				echo '<pre>';
				var_dump($column_match_with);
			$array = array('lastname', 'email', 'phone');
			$comma_separated = implode("", $array);
			echo $comma_separated;
			die;
			//echo '<pre>';
			//print_r($column_match_with);
			$sql = "SELECT COLUMN_NAME,COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname_2' AND TABLE_NAME = '$filter_table[1]' ";
			$statement = $db->prepare($sql);
			$statement->execute();
			$column_match_2 = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($column_match_2 as $value) {
				if(is_array($value)){
					foreach ($value as $val) {
						$column_match[]= $val;
					}
				}
			}die;
			echo '<pre>';
			print_r($column_match);
			$result_filter = array_intersect($column_match_with, $column_match);
			echo '<pre>';
			//echo 'with::'.count($column_match_with);
			//echo 'intersect:::'.count($result_filter).'<br>';
			print_r($result_filter);
			if(count($column_match_with)==count($result_filter)){
				echo 'tables perfectly match'.'<br>';
			}else{
				$column_miss = array_diff($column_match_with, $column_match);
				foreach ($column_miss as $value) {
					echo $value.' Column does not exist in '.$dbname_2.'.'.$filter_table[$i].' table'.'<br>';
				}
				die;
			}
			echo '<br>';
			echo 'table->'.$filter_table[1].'<br>';die;
		}
	}

?>














	
	
