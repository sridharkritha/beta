<?php
include_once 'dbconfig.php';

echo "<pre>";
print_r($_POST);
print $m;
echo "</pre>";

if($_POST['del_id'])
{
	$id = $_POST['del_id'];	
	$stmt=$db_con->prepare("DELETE FROM horse WHERE id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>