<!DOCTYPE html>
<meta charset="UTF-8" />


<?php include "includes/header.php"; ?>

<head>
  <title> Order form -- RUSH Albums </title>
<header>
   <h1> Welcome to E-Commerce Site YYZ </h1>
	<hr>
   <h2><i>We will <strong>RUSH</strong> your order to you!</i></h2>
</header>

</head>

<body>
<!--Build a form to place orders for albums-->
<form action="purchase.php" method="post">
    <fieldset>
	<legend><strong>Personal information</strong></legend>
	 <table>
 	 <tr>
    <td>
    
    First name:<br>
    <input type="text" name="firstname" value="">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="">
    <br>
    Street Address:<br>
    <input type="text" name="address" value="">
    <br>
    </td>
    <td>
	<br>
    City:<br>
    <input type="text" name="city" value="">
    <br>
    State:<br>
    <input type="text" name="state" value="">
    <br>
    Zipcode:<br>
    <input type="text" name="zipcode" value="">
    <br><br>
    </td>
    </tr>
    </table> 
    </fieldset>

    <fieldset>
     <legend><strong>Product Order</strong></legend>

      Album Selection:<br> <select multiple name="albumSelection[]">
			<option value="2112">2112 - 10.99</option>
			<option value="presto">Presto - 10.99</option>
			<option value="flybynight">Fly By Night - 10.99</option>
			<option value="alltheworldsastage">All the World's a Stage - 10.99</option>
			<option value="chronicles">Chronicles - 10.99</option>
			<option value="exitstageleft">Exit Stage Left - 10.99</option>
			<option value="caressofsteel">Caress of Steel - 10.99</option>
			<option value="movingpictures">Moving Pictures - 10.99</option>
			<option value="testforecho">Test For Echo - 10.99</option>
			<option value="afarewelltokings">A Farewell to Kings - 10.99</option>
		        <option value="signals">Signals - 10.99</option>
			<option value="powerwindows">Power Windows - 10.99</option>
		       </select><br>

     Comments:<br>
	 <textarea name="comments"></textarea><br>

    </fieldset>
   
    <fieldset>
	<legend><strong>Credit Information</strong></legend>
	  <img src="img/card.png" width="230em" height="40em"><br>
	  <input type="radio" name="cardType" value="MasterCard">MasterCard<br>
	  <input type="radio" name="cardType" value="Visa"> Visa<br>
	  <input type="radio" name="cardType" value="Discover"> Discover<br>
	  <input type="radio" name="cardType" value="Amex">American Express<br><br>

	  Card Number: <input type="number" name="cardNum" value="">
          Exp Date: <input type="date" name="expDate"><br>

    </fieldset><br>
    <input type="submit" class="btn btn-success btn-lg" value="Submit">
  </fieldset>
</form>



</body>

<?php 
 include "includes/footer.php";
?>


</html>