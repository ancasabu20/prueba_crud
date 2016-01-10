<?php
// coneccion BD
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('symfony') ) {
    die ('Can\'t use symfony : ' . mysql_error());
}

//Send DAta
$query="SELECT ord.*, cus.first_name , cus.last_name,CONCAT(
(SELECT COUNT(id) FROM `orders_items` as ite  WHERE ite.id_order= ord.id)
) as n_items FROM `orders` as ord join  `customers` as cus on  ord.id_customer=cus.id ";
 
$result = mysql_query($query) or trigger_error(mysql_error()); 

?>