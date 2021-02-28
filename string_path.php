<form action="" method="post">
	<table>
		<tr>
			<td>String1: </td>
			<td><textarea cols="30" rows="2" type="text" name="string1" ><?php echo $var = isset($_POST['string1']) ? $_POST['string1'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>String2: </td>
			<td><textarea cols="30" rows="2" type="text" name="string2"><?php echo $var = isset($_POST['string2']) ? $_POST['string2'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>String3: </td>
			<td><textarea cols="30" rows="2" type="text" name="string3" ><?php echo $var = isset($_POST['string3']) ? $_POST['string3'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>String4: </td>
			<td><textarea cols="30" rows="2" type="text" name="string4"><?php echo $var = isset($_POST['string4']) ? $_POST['string4'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td>String5: </td>
			<td><textarea cols="30" rows="2" type="text" name="string5"><?php echo $var = isset($_POST['string5']) ? $_POST['string5'] : ''; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</table>

</form>
<textarea cols="30" rows="10" type="text" name="6">
<?php
	if(isset($_POST['submit'])){
		$string1=trim($_POST['string1']);
		$string2=trim($_POST['string2']);
                $string3=trim($_POST['string3']);
                
                $string4=trim($_POST['string4']);
		$string4=explode("\n", $string4);
                
                $string5=trim($_POST['string5']);
                $string5=str_replace("\"","",$string5);
		$string5=explode("\n", $string5);
                {
			foreach ($string4 as $value) {
			    
			    echo $string1;
			    echo PHP_EOL;
			    echo trim($value);
			    echo PHP_EOL;
			    echo $string2;
			    echo PHP_EOL;
			    foreach ($string5 as $value5){    
				$value5 = "put_".$value5;
				print_r($value5);
			    }
			    echo PHP_EOL;
			    echo $string3;
			    echo PHP_EOL;
			    echo PHP_EOL;
			}
                        
		}
	}else{
                echo 'Not Found Such Word For Replace';
        }
?>
</textarea>