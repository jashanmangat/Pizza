<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html >
 <head>
        <title>CONESTOGA PIZZERIA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <link rel="stylesheet" href="style.css"  type="text/css" />
       <script src="formValidation.js" type="text/javascript"></script>
    </head>
    <body>
        <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
        </p>
        <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
   
        <div id='main'>
          
            <h1>CONESTOGA PIZZERIA</h1>
          
            <form action="PizzaOrder.php" method="get" onsubmit="return isRegistrationFormValid();">
        <div id ='first'>
 
		<br>
			<a href="ViewOrder.php" >View All Orders</a>
        <br>
	
            <br/><br/>
            <h3>PERSONAL INFORMATION</h3><br/><br/>
<label for="forename">Forename: </label>
<input type="text" name="forename" id="forename" /><br />
<br></br>
<label for="surname">Surname: </label>
<input type="text" name="surname" id="surname" /><br/>
<br></br>
<label for="address">Address: </label>
<input type="text" name="address" id="address" /><br />
<br></br>
<label for="city">City: </label>
<input type="text" name="city" id="city" /><br />
<br></br>
<label for="province">Province: </label>
<select id="province" name="province"> 
    <option>[Select]</option>
     <option>Ontario</option>
     <option>Quebec</option>
 
    
     <option>Manitoba</option>
     
  
     <option>Saskatchewan</option>
   
    
    </select><br/>
    <br></br>
    <label for="postalcode">Postal Code: </label>
<input type="text" name="postalcode" id="postalcode" /><br />
<br></br>
<label for="telephonenumber">Telephone Number: </label>
<input type="text" name="telephonenumber" id="phonenumber" /><br/>
<br></br>
<label for="email">Email: </label>
<input type="text" name="email" id="email" /><br />

							
</div>
        <div id ='second'>
            <h3>ORDER INFORMATION</h3> <br></br>
      <label for="numberofpizzas">Number Of Pizzas: </label>
<input type="text" name="numberofpizzas" id="numberofpizzas" /><br /> 
<br></br>
<label for="size">Size</label><br />
 <input type="radio" name="radiosize" id="radio_small" value="small" /> 
    <label for="radio_small">small</label>
     <input type="radio" name="radiosize" id="radio_large" value="large" /> 
    <label for="radio_large">large</label>
     <input type="radio" name="radiosize" id="radio_medium" value="medium" /> 
    <label for="radio_medium">medium</label>
     <input type="radio" name="radiosize" id="radio_Extralarge" value="Extralarge" /> 
     <label for="radio_Extralarge">Extra large</label><br/>
     <br></br>
     
     <label for="crusttype">Crust Type</label><br />
     <select id="crusttype" name="crusttype"> 
     
    <option>[Select]</option>
     <option>Hand-Tossed Pizza</option>
     <option >Pan Pizza</option>
     <option value="Stuffed Crust" >Stuffed Crust</option>
     <option >Thin Crust</option>								
    </select><br/>
    <br></br>
       <label for="toppings">Toppings</label><br />
       <input type="checkbox" name="toppings[]" value="Sausage" /> Sausage &nbsp;&nbsp;
	<input type="checkbox" name="toppings[]" value="Pepperoni" /> Pepperoni &nbsp;&nbsp;
	<input type="checkbox" name="toppings[]" value="Beef" /> Beef &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="toppings[]" value="Olives" /> Olives <br />
	<input type="checkbox" name="toppings[]" value="Bacon" /> Bacon &nbsp;&nbsp; &nbsp;&nbsp;
        <input type="checkbox" name="toppings[]" value="Chicken" /> Chicken &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="toppings[]" value="Peppers" /> Peppers &nbsp;
	<input type="checkbox" name="toppings[]" value="Ham" /> Ham <br />
	<input type="checkbox" name="toppings[]" value="Tomatoes" /> Tomatoes 
	<input type="checkbox" name="toppings[]" value="Mushroom" /> Mushroom &nbsp;
	<input type="checkbox" name="toppings[]" value="Pineapple" /> Pineapple <br />
        <br></br>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
            <input type="submit" />
            <input type="reset" />
            
            
            </div>
                </form>
        </div>
     
    </body>
      
</html>
