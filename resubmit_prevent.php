<?php
session_start();

// Process form
if(isset($_POST['submit']) && $_POST['key'] == $_SESSION['key'])
{
// Process
 echo 'processed';
}
else {
 echo 'not prcoessed';
}
?>

<?php
$_SESSION['key'] = mt_rand(1, 1000);
?>
<!-- Form -->
<form action="" method="post">
<input type="text" name="key" value="<?php echo $_SESSION['key'] ?>" />
<input type="submit" name="submit" value="Submit" />
</form>