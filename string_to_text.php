<form action="" method="post">
	<table>
		<tr>
			<td>String: </td>
			<td><textarea cols="30" rows="4" type="text" name="string" ><?php echo $var = isset($_POST['string']) ? $_POST['string'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>New: </td>
			<td><textarea cols="30" rows="4" type="text" name="new"><?php echo $var = isset($_POST['new']) ? $_POST['new'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>String1: </td>
			<td><textarea cols="30" rows="4" type="text" name="string1" ><?php echo $var = isset($_POST['string1']) ? $_POST['string1'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>New1: </td>
			<td><textarea cols="30" rows="4" type="text" name="new1"><?php echo $var = isset($_POST['new1']) ? $_POST['new1'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>

</form>
<?php
	if(isset($_POST['submit'])){
		$text=$_POST['string'];
		$change='.';
		$new=trim($_POST['new']);
		$array=explode("\n", $new);
		//$array = explode(' ', $new);
		$text1=$_POST['string1'];
		$change1='.';
		$new1=trim($_POST['new1']);
		$array1=explode("\n", $new1);

		if (strpos($text,$change) !== false) {
			foreach ($array as $value) {
				$new_array=explode(" ", $value);
				foreach ($new_array as $value) {
					$replace = str_replace($change, $value, $text);
					if (strpos($text1,$change1) !== false) {
						foreach ($array1 as $value1) {
							$new_array1=explode(" ", $value1);
							foreach ($new_array1 as $value1) {
								$replace1 = str_replace($change1, $value1, $text1);
								echo $replace.$replace1.'<br/>';
							}
							
						}
					}
				}
				
			}
		}else{
			echo 'Not Found Such Word For Replace';
		}
	}
?>