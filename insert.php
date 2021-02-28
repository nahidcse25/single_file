<form action="" method="post" onsubmit="test();">
	<table>
		<tr>
			<td>String: </td>
			<td><textarea cols="150" rows="8" type="text" name="string" ><?php echo $var = isset($_POST['string']) ? $_POST['string'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>Change: </td>
			<td><input type="text" name="change" value='<?php if(isset($_POST['change'])) echo $_POST['change']; ?>'></td>
		</tr>
		<tr>
			<td>New: </td>
			<td><textarea cols="30" rows="8" type="text" name="new"><?php echo $var = isset($_POST['new']) ? $_POST['new'] : ''; ?></textarea></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
		<tr>
			<td>Result: </td>
				
			<td><?php
				if(isset($_POST['submit'])){
					$text=$_POST['string'];
					$change=$_POST['change'];
					$new=trim($_POST['new']);
					$array=explode("\n", $new);
					if (strpos($text,$change) !== false) {
						{	
							?>
							<textarea cols="150" rows="25" type="text" ><?php foreach ($array as $value) {
								$new_array=explode(" ", $value);
								foreach ($new_array as $value) {
									$replace = str_replace($change, $value, $text);
									$replace = str_replace("\r","", $replace);
									echo $replace;
									
								}
								
								}?></textarea>
							<?php 
						}
					}else{
						echo 'Not Found Such Word For Replace';
					}
				}
				?>
			</td>
		</tr>
	</table>
</form>