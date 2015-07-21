<?php
class ManageOrder {
	public function totalcost()
	 {
	  
	  $totalcost=0;
	  $tax;
	  $sizecost;
	  
	  $numberofpizza = $_SESSION["numberofpizzas"];
	  $province = $_SESSION["province"];
	  $size = $_SESSION["radiosize"];
	  $toppings = $_SESSION["toppings"];
	  $crusttype = $_SESSION["crusttype"];
	  
	  if($province == "Ontario")
		{

		$tax = 0.13;

		}
		else if ($province == "Manitoba") 
		{
		$tax = 0.13;
		}
		
		else if ($province == "Quebec")
		{
		
		$tax = 0.1495;
		}
		
		else if ($province == "Saskatchewan")
		{
		$tax = .05;
		}
		
		else
		{
			
		$tax = 0.13;
		
		}
	  
	  
		 if ($size == "small")
		 {
			$sizecost = 5;
		 }
		 else if ($size == "medium")
		 { 
			 $sizecost =  10;
		 }
		 
		 else if ($size == "large")
		 {
			 $sizecost =  15;
		 }
	 
		 else if ($size == "Extralarge")
		 {
			$sizecost =  20;
				 
			}
		 else
		 {
			$sizecost =  20;
		 }
		 
		 if("Stuffed Crust" == $crusttype)
		 {
		   
		$totalcost= totalcost+2;
		 }
		 
		if(count($toppings)>1)
		{
			$length= count($toppings);
			$length=$length-1;
			
			$totalcost = $totalcost + $length*.5;
		}
		
		
		if($numberofpizza>1)
		{
			$totalcost = $totalcost*$numberofpizza;
		}
			
		  $totalcost = ($totalcost + $sizecost);
		  $totalcost =  $totalcost + $totalcost*$tax;
		  
		  return $totalcost;
	  
	 }

	public function orderPizza()
    { 

		// Make a MySQL Connection
		mysql_connect("localhost", "root", "") or die(mysql_error());
		mysql_select_db("pizzeria") or die(mysql_error());
		
		$forename = $_SESSION["forename"];
        $surname = $_SESSION["surname"] ;
        $address = $_SESSION["address"];
        $city = $_SESSION["city"];
        $postalcode = $_SESSION["postalcode"];
        $province = $_SESSION["province"];
        $telephonenumber = $_SESSION["telephonenumber"];
        $email = $_SESSION["email"];
        $numberofpizzas = $_SESSION["numberofpizzas"];
        $size = $_SESSION["radiosize"];
        $crusttype = $_SESSION["crusttype"];
        $toppings = $_SESSION["toppings"];
		$totalCost = $_SESSION["totalcost"];

		// Insert a row of information into the table "example"
		mysql_query("INSERT INTO customers 
		(forename, surname, address, city, province, postalcode, telephonenumber, email) 
		VALUES('$forename', '$surname', '$address', '$city', '$province', '$postalcode', '$telephonenumber', '$email' ) ") 
		or die(mysql_error());  
		$customerId = mysql_insert_id();
		
		mysql_query("INSERT INTO pizza 
		(numberofpizzas, radiosize, crusttype, toppings, totalcost, customerId) VALUES('$numberofpizzas', '$size', '$crusttype', '$toppings', '$totalCost', '$customerId' ) ") 
		or die(mysql_error());  
		
		echo "Data Inserted!";
       
    }
}
?>