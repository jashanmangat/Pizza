<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
               <link rel="stylesheet" href="style.css"  type="text/css" />
        <title>JSP Page</title>
    </head>
    <body>
        <h1> List Of Pizza Orders: </h1>
        <br>
        <br>
		<br>
			<a href="index.php" >New Order</a>
        <br>
		<br>
        <br>
        <?php
			// Make a MySQL Connection
			mysql_connect("localhost", "root", "") or die(mysql_error());
			mysql_select_db("pizzeria") or die(mysql_error());

			$result = mysql_query("SELECT 
			pizza.pizzaId, pizza.status , customers.forename, customers.surname, customers.address, customers.city, customers.province, customers.postalcode, customers.email,  pizza.numberofpizzas, pizza.radiosize, pizza.crusttype, pizza.totalcost, customers.telephonenumber
                                    FROM pizza
                                    INNER JOIN customers
                                    ON pizza.customerId = customers.customerId ") 
			or die(mysql_error());  

			echo "<table border='1'>";
			echo "<tr> <th>Id</th> <th>Status</th> <th>Delete</th> <th>Name</th> <th>Number Of Pizza</th> <th>Size</th> <th>Crust</th> <th>Total Cost</th> <th>Address</th> <th>Phone Number</th> <th>Email</th></tr>";
			// keeps getting the next row until there are no more to get
			$count=1;
			while($row = mysql_fetch_array( $result )) {
				// Print out the contents of each row into a table
				echo "<tr><td>"; 
				echo $count;
				echo "</td><td>"; 
				if($row['status'] == 0)
					echo 'Current Order';
				else
					echo 'Past Order';
				echo "</td><td>"; 
				echo "<a href='DeletePizza.php?id=".$row['pizzaId']."'>Delete</a>";
				echo "</td><td>"; 
				echo $row['forename']. " " . $row['surname'];
				echo "</td><td>"; 
				echo $row['numberofpizzas'];
				echo "</td><td>"; 
				echo $row['radiosize'];
				echo "</td><td>"; 
				echo $row['crusttype'];
				echo "</td><td>"; 
				echo $row['totalcost'];
				echo "</td><td>"; 
				echo $row['address'] . ", ". $row['city']. ", ". $row['province']. ", ". $row['postalcode'] ;
				echo "</td><td>"; 				 
				echo $row['telephonenumber'];
				echo "</td><td>"; 
				echo $row['email'];
				echo "</td></tr>";  
				$count++;
			} 

			echo "</table>";
        ?>
         <img  src="img2.jpg" width="323"  height="267"  border='solid' border-color='red' />
        

        
    </body>
</html>