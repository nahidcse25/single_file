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
	if(!empty($db_2_miss)){?>
		<h4><?php echo "Missing table List:";?></h4><?php
		foreach ($db_2_miss as $miss_table) {
			//echo $miss_table.'</br>';
		}
	}
	$db_2_extra = array_diff($db_2, $db_1);
	if(!empty($db_2_extra)){ ?>
		<h4><?php echo "Extra table List:";?></h4><?php
		foreach ($db_2_extra as $extra_table) {
			//echo $extra_table.'</br>';
		}
	}
	$common_table = array_intersect($db_1, $db_2);
	if(!empty($common_table)){
		//echo "Common table List:".'</br>';
		foreach ($common_table as $value) {
			$filter_table[]= $value;
			//echo $value.'</br>';
		}
	}
	//die;
	$status = 0;
	if(!empty($filter_table)){
		//echo $filter_table[0];die;
		for($i=0;$i<count($filter_table);$i++){
			$column_match_with = array();
			unset($column_match_with);
			$column_match = array();
			unset($column_match);
			$sql = "SELECT CONCAT(COLUMN_NAME,'-',COLUMN_TYPE) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname_1' AND TABLE_NAME = '$filter_table[$i]' ";
			$statement = $db->prepare($sql);
			$statement->execute();
			$column_match_1 = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($column_match_1 as $value) {
				if(is_array($value)){
					foreach ($value as $val) {
						$column_match_with[]= $val;
					}
				}
			}
			$sql = "SELECT CONCAT(COLUMN_NAME,'-',COLUMN_TYPE) FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$dbname_2' AND TABLE_NAME = '$filter_table[$i]' ";
			$statement = $db->prepare($sql);
			$statement->execute();
			$column_match_2 = $statement->fetchAll(PDO::FETCH_ASSOC);
			foreach ($column_match_2 as $value) {
				if(is_array($value)){
					foreach ($value as $val) {
						$column_match[]= $val;
					}
				}
			}
			$result_column_match = array_intersect($column_match_with, $column_match);
			if(count($column_match_with)==count($result_column_match)){
				$status = $status+1;
			}else{ 
				$column_miss = array_diff($column_match_with, $column_match);
				/*echo '<pre>';
				print_r($column_miss);
				echo '<pre>';
				print_r($column_match);*/
				foreach ($column_miss as $value) {
					$val = explode("-", $value);
					//echo $val[0].'</br>';
					if(strpos(implode(' ', $column_match), $val[0]) !== false){
						echo $dbname_2.' > '.$filter_table[$i].' > '.$val[0].' column name or type does not matches.<br>';
					}else{
						echo $dbname_2.' > '.$filter_table[$i].' > '.$val[0].' column name missing.<br>';
					}
				}
			}
		}
	}else{ ?>
		<h2><?php echo 'There is no common table between '.$dbname_1.' and '.$dbname_2;?><h2>
	<?php }
	echo '</br>';
	if($status==count($common_table)){ ?>
		<h2><?php echo $dbname_2.' match with '.$dbname_1;?><h2>
	<?php }else{ ?>
		<h2><?php echo $dbname_2.' does not match with '.$dbname_1;?></h2>
	<?php }
?>














	
	
