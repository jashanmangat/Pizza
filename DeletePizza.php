<?php
	$pizzaId = $_GET['id'];

	// Make a MySQL Connection
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("pizzeria") or die(mysql_error());
	
	mysql_query("DELETE FROM pizza WHERE pizzaId='$pizzaId'") 
	or die(mysql_error());  

	header("Location: ViewOrder.php");
	die();
?>