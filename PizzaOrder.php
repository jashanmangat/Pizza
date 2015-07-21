<?php
	include 'ManageOrder.php';
	
	// Set session variables
	$_SESSION["forename"] = $_GET['forename'];
	$_SESSION["surname"] = $_GET['surname'];
	$_SESSION["address"] = $_GET['address'];
	$_SESSION["city"] = $_GET['city'];
	$_SESSION["province"] = $_GET['province'];
	$_SESSION["postalcode"] = $_GET['postalcode'];
	$_SESSION["telephonenumber"] = $_GET['telephonenumber'];
	$_SESSION["email"] = $_GET['email'];
	$_SESSION["numberofpizzas"] = $_GET['numberofpizzas'];
	$_SESSION["radiosize"] = $_GET['radiosize'];
	$_SESSION["crusttype"] = $_GET['crusttype'];
	$toppings = $_GET['toppings'];
	$_SESSION["toppings"] = implode(',', $toppings);
	
	$manage = new ManageOrder;
	$_SESSION['totalcost'] = $manage->totalcost();
	$manage->orderPizza();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
               <link rel="stylesheet" href="style.css"  type="text/css" />
        <title>JSP Page</title>
    </head>
    <body>
        <h1> You have successfully place an order and your information is as below: </h1>
        <br>
        <br>
		<br>
			<a href="ViewOrder.php" >View All Orders</a>
        <br>
		<br>
        <br>
        <h2>Forename: <?php echo $_SESSION["forename"] ?></h2>
        <h2>Surname:<?php echo $_SESSION["surname"] ?></h2>
        <h2>Address:<?php echo $_SESSION["address"] ?></h2>
        <h2>City:<?php echo $_SESSION["city"] ?></h2>
        <h2>Province:<?php echo $_SESSION["province"] ?></h2>
        <h2>Postal Code:<?php echo $_SESSION["postalcode"] ?></h2>
        <h2>Telephone Number:<?php echo $_SESSION["telephonenumber"] ?></h2>
        <h2>Email:<?php echo $_SESSION["email"] ?></h2>
        <h2>You have ordered <?php echo $_SESSION["numberofpizzas"] ?> pizza</h2>
        <h2>Your size of pizza is <?php echo $_SESSION["radiosize"] ?></h2>
        <h2>You have choose <?php echo $_SESSION["crusttype"] ?> crust type</h2>
        <h2>Your total cost is <?php echo $_SESSION['totalcost'] ?></h2>
        
        <h2> You have choose these toppings :
            <?php
				foreach($toppings as $top)
					echo $top. ", ";
			?>
        </h2>
       
         <img  src="img2.jpg" width="323"  height="267"  border='solid' border-color='red' />
        

        
    </body>
</html>
