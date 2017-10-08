<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="description" content="Lab 4 web forms and php">
    <meta name="keywords" content="HTML,PHP">
    <meta name="author" content="John Delaney">
    <meta name="subject" content="9/17/2017 FALL 2017 SDEV300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

  include "includes/header.php";

  // Normal development I place these in another file for ease of reading the html

$rows = selectAllProducts();
 ?>

<head>
  <title> RUSH Albums</title>
  <header>
   <h1> Welcome to E-Commerce Site YYZ </h1>
	<hr>
   <h2><i>We will <strong>RUSH</strong> your order to you!</i></h2>
  </header>
</head>


  <body>

<p> We have a small limited stock of <strong>RUSH</strong> records still left on the <strong> Shelves</strong>!</p>
	<!-- List of Products and description-->
   <ul>
      <li>Random RUSH Albums</li>
	 <ul>
	   <li>Quick turn around!</li>
	   <li>UPS Deliverly</li>
           <li>All Major Credit Cards Accepted!</li>
        </ul>
      <li><a href="order.php">Place an Order here!</a> </li>
   </ul>

<p> Check out the albums on hand </p>

	<table border="1" padding="2">
	<tr>
	<?php
		$colCount = 0;
		foreach ($rows as $row){
		    if ($colCount % 6 != 0){
			echo'<td><img src="'. $row['ProductPicture'] . '" width="150em" height="150em"><br>'. $row['ProductName'] .'-'. $row['ProductPrice'] .'</a></td>';
		    }else{
			echo'</tr><tr>';
			echo'<td><img src="'. $row['ProductPicture'] . '" width="150em" height="150em"><br>'. $row['ProductName'] .'-'. $row['ProductPrice'] .'</a></td>';
		    }
		   $colCount++;
		}

	?>
	</tr>
	
	</table>

  
<?php
 include "includes/footer.php";
?>
</body>


</html>