<form action="" method="post">
	<table>
		
		<tr>
			<td>Time: </td>
			<td><input type="text" name="time" value='<?php if(isset($_POST['time'])) echo $_POST['time']; ?>'></td>
		</tr>
		<tr>
			<td>end Time: </td>
			<td><input type="text" name="timee" value='<?php if(isset($_POST['timee'])) echo $_POST['timee']; ?>'></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>

</form>

<?php
	if(isset($_POST['submit'])){
		$time=$_POST['time'];
		$end_time=$_POST['timee'];
		$time_start= date("H:i", strtotime($time));
		$time_end= date("H:i", strtotime($end_time));
		$current = time('h:i');
		$time_current= date("H:i", strtotime($current));
		echo $time_current.'<br/>'.$time_start.'<br/>'.$time_end.'<br/>';
		if($time_current >= $time_start && $time_current <= $time_end) {
		    	echo "ok";
		}else{
			echo 'false';
		}
	}
		/*if(($time<'13:00:00 am' || $time<'13:00:00 pm') && (($end_time<'13:00:00 am' || $end_time<'13:00:00 pm'))){
		}else{
			echo 'please enter time between (01:00:00-12:00:00) am to (01:00:00-12:00:00) pm';
		}*/
?>