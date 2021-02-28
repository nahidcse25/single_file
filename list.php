<?php
	if(isset($_POST['submit'])){
		$text = trim($_POST['string']); // remove the last \n or whitespace character
		//$text = nl2br($text); // insert <br /> before \n
		$text=explode("\n", $text);
		foreach ($text as $value) {
			$te=explode(" ", $value);
			foreach ($te as $value) {
				echo 'my name is'.$value.'<br/>';
			}
		}
	}
	//date_default_timezone_set('Asia/Dhaka');
	//$time_now=mktime(date('G'),date('i'),date('s'));
	//$NowisTime=date('G:i:s',$time_now);
	/*$start = gmdate('H:i:s', strtotime('06:00:00'));
	$end =gmdate('H:i:s', strtotime('17:00:00'));
	date_default_timezone_set('Asia/Dhaka');

	$current_time = date('H:i:s');
	$current = gmdate('H:i:s', strtotime($current_time));*/

	/*$start = time('06:00:00');
	$end = time('7:00:00');
	echo $end;
	$current = time('h:i:s');
	echo 'current:'.$current.'<br/>'.'start:'.$start.'<br/>'.'end:'.$end.'<br/>';
	if($current >= $start && $current <= $end) {
	    echo "ok";
	}else{
		echo 'false';
	}*/
	echo date("H:i", strtotime("04:25 PM"));

die;
	$time_now=mktime(date('G'),date('i'),date('s'));
	$NowisTime=date('G:i:s',$time_now);
	echo $NowisTime.'<br/>';
	date_default_timezone_get();
	$current = date("Y-d-mTG:i:sz",strtotime($NowisTime));
	$start = date("Y-d-mTG:i:sz",strtotime("6:00:00"));
	$end = date("Y-d-mTG:i:sz",strtotime("17:00:00"));
	echo $current.'<br/>'.$start.'<br/>'.$end.'<br/>'.'utc:'.'<br/>';
	date_default_timezone_set("UTC");
	$current1 = date("G:i:s",strtotime($NowisTime));
	$start1 = date("G:i:s",strtotime("6:00:00"));
	$end1 = date("G:i:s",strtotime("17:00:00"));
	echo $current1.'<br/>'.$start1.'<br/>'.$end1.'<br/>';
	if($current1 >= $start1 && $current1 <= $end1) {
	    echo "ok";
	}else{
		echo 'false';
	}

?>
 <form action="" method="post">
	<table>
		<tr>
			<td>String: </td>
			<td><textarea cols="30" rows="4" type="text" name="string" ><?php echo $var = isset($_POST['string']) ? $_POST['string'] : ''; ?></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>

</form> 