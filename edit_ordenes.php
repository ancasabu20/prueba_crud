<? 
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `orders` SET  `id_customer` =  '{$_POST['id_customer']}' ,  `description` =  '{$_POST['description']}' ,  `total` =  '{$_POST['total']}' ,  `num` =  '{$_POST['num']}' ,  `created_at` =  '{$_POST['created_at']}' ,  `updated_at` =  '{$_POST['updated_at']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='lista_ordenes.php'>Volver a la lista</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `orders` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>Id Customer:</b><br /><input type='text' name='id_customer' value='<?= stripslashes($row['id_customer']) ?>' /> 
<p><b>Description:</b><br /><input type='text' name='description' value='<?= stripslashes($row['description']) ?>' /> 
<p><b>Total:</b><br /><input type='text' name='total' value='<?= stripslashes($row['total']) ?>' /> 
<p><b>Num:</b><br /><input type='text' name='num' value='<?= stripslashes($row['num']) ?>' /> 
<p><b>Created At:</b><br /><input type='text' name='created_at' value='<?= stripslashes($row['created_at']) ?>' /> 
<p><b>Updated At:</b><br /><input type='text' name='updated_at' value='<?= stripslashes($row['updated_at']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
