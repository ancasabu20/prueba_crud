<?php
include('config.php'); 


echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id</b></td>"; 
echo "<td><b>Customer</b></td>"; 
echo "<td><b>Description</b></td>"; 
echo "<td><b>Total</b></td>"; 
echo "<td><b>Num</b></td>"; 
echo "<td><b>quantity</b></td>"; 
echo "</tr>"; 

while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['first_name']) ." ".nl2br( $row['last_name']). "</td>";  
echo "<td valign='top'>" . nl2br( $row['description']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['total']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['num']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['n_items']) . "</td>";  
echo "<td valign='top'><a href=edit_ordenes.php?id={$row['id']}>Edit</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
?>