<form action="" method="post">
	<table>
		<tr>
			<td>String: </td>
			<td><textarea cols="30" rows="4" type="text" name="string" ><?php echo $var = isset($_POST['string']) ? $_POST['string'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>Change: </td>
			<td><input type="text" name="change" value='<?php if(isset($_POST['change'])) echo $_POST['change']; ?>'></td>
		</tr>
		<tr>
			<td>New: </td>
			<td><textarea cols="30" rows="4" type="text" name="new"><?php echo $var = isset($_POST['new']) ? $_POST['new'] : ''; ?></textarea></td>
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
		$change=$_POST['change'];
		$new=trim($_POST['new']);
		$array=explode("\n", $new);
		//$array = explode(' ', $new);
		$convert=array('Nahid','Kabir','Mohiuddin','Masud','etc');
		if (strpos($text,$change) !== false) {
			foreach ($array as $value) {
				$new_array=explode(" ", $value);
				foreach ($new_array as $value) {
					$replace = str_replace($change, $value, $text);
					echo $replace.'<br/>';
				}
				
			}
		}else{
			echo 'Not Found Such Word For Replace';
		}
	}
?>