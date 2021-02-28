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
	$dbname_2 = array('acc_battery_palton_18','hll_dumy','banner','materils');
	for($j=0;$j<count($dbname_2);$j++){
		$db_2 = array();
		unset($db_2);
		$statement = $db->prepare("SHOW TABLES FROM $dbname_2[$j]");
		$statement->execute();
		$result_2 = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach ($result_2 as $value) {
			if(is_array($value)){
				foreach ($value as $val) {
					$db_2[]= $val;
				}
			}
		}   
		if(!empty($db_1) && !empty($db_2)){ ?>
			<h2 style ="color:red"><?php echo "Compare database between  ".$dbname_1.' and '.$dbname_2[$j];?></h2><?php
		}
		$db_2_miss = array_diff($db_1, $db_2);
		$k = 1;
		if(!empty($db_2_miss)){?>
			<h4 style ="color:green"><?php echo "Missing table List:";?></h4><?php
			foreach ($db_2_miss as $miss_table) {
				echo $k++.'. '.$miss_table.'</br>';
			}
		}
		$db_2_extra = array_diff($db_2, $db_1);
		$l = 1;
		if(!empty($db_2_extra)){ ?>
			<h4 style ="color:green"><?php echo "Extra table List:";?></h4><?php
			foreach ($db_2_extra as $extra_table) {
				echo $l++.'. '.$extra_table.'</br>';
			}
		}
		$common_table = array_intersect($db_1, $db_2);
		//var_dump($common_table);
		$filter_table = array();
		unset($filter_table);
		if(!empty($common_table)){
			//echo "Common table List:".'</br>';
			foreach ($common_table as $value) {
				$filter_table[]= $value;
				//echo $value.'</br>';
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
					$sql = "SHOW COLUMNS FROM $filter_table[$i] FROM $dbname_1";
					$statement = $db->prepare($sql);
					$statement->execute();
					$column_match_1 = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($column_match_1 as $value) {
						$column_match_with[] = $value['Field'].'-'.$value['Type'];
					}
					$sql = "SHOW COLUMNS FROM $filter_table[$i] FROM $dbname_2[$j]";
					$statement = $db->prepare($sql);
					$statement->execute();
					$column_match_3 = $statement->fetchAll(PDO::FETCH_ASSOC);
					foreach ($column_match_3 as $value) {
						$column_match[] = $value['Field'].'-'.$value['Type'];
					}
					$result_column_match = array_intersect($column_match_with, $column_match);
					if(count($column_match_with)==count($column_match) && count($column_match_with)==count($result_column_match)){
						$status = $status+1;
					}else{ ?><h4 style="color:green"><?php echo "Error List  by table name >: ".$filter_table[$i];?></h4><?php
						$column_miss = array_diff($column_match_with, $column_match);
						$column_extra = array_diff($column_match, $column_match_with);
						foreach ($column_miss as $value) {
							$val = explode("-", $value);//ALTER TABLE `customer`  ADD `phone2` VARCHAR(20) NOT NULL ;
							//echo $val[1].'</br>';  //ALTER TABLE `admin_user_info` CHANGE `address` `address` VARCHAR(500);
							if(strpos(implode(' ', $column_match), $val[0]) !== false){
								echo $dbname_2[$j].' > '.$filter_table[$i].' > '.$val[0].' type does not matches'.'   SQL_QUERY>>ALTER TABLE `'.$filter_table[$i].'` CHANGE `'.$val[0].'` `'.$val[0].'` '.$val[1].';'.'<br>';
							}else{
								echo $dbname_2[$j].' > '.$filter_table[$i].' > '.$val[0].' column name missing'.'   SQL_QUERY>>ALTER TABLE `'.$filter_table[$i].'` ADD `'.$val[0].'` '.$val[1].';'.'<br>';
							}
							//echo $dbname_2[$j].' > '.$filter_table[$i].' > '.$value.' does not matches.<br>';
						}
						if(!empty($column_extra)){
							foreach ($column_extra as $extra) {
								$extra_val = explode("-", $extra);
								//echo $extra_val[0].'</br>';  //ALTER TABLE `admin_setup` DROP `rr`;
								if(strpos(implode(' ', $column_match_with), $extra_val[0]) !== false){
									//echo $dbname_1[$j].' > '.$filter_table[$i].' > '.$extra_val[0].' Exist but type not match.<br>';
								}else{
									echo $dbname_2[$j].' > '.$filter_table[$i].' > '.$extra_val[0].' Extra'.'   SQL_QUERY>>ALTER TABLE `'.$filter_table[$i].'` DROP `'.$extra_val[0].'`;'.'<br>';
								}
							}
						}
					}
				}
			}else{ ?>
				<h3 style ="color:#4286f4"><?php echo 'There is no common table between '.$dbname_1.' and '.$dbname_2[$j];?><h3>
			<?php }
		}else{ ?>
				<h3 style ="color:#4286f4"><?php echo 'There is no common table between '.$dbname_1.' and '.$dbname_2[$j];?><h3>
		<?php }
		echo '</br>';
		if($status==count($common_table) && empty($miss_table) && empty($extra_table)){ ?>
			<h3 style ="color:blue"><?php echo $dbname_2[$j].' match with '.$dbname_1;?><h3>
		<?php }else{ ?>
			<h3 style ="color:orange"><?php echo $dbname_2[$j].' does not match with '.$dbname_1;?></h3>
		<?php }
	}			
?>














	
	
