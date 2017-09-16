<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="description" content="Lab 4 web forms and php">
    <meta name="keywords" content="HTML,PHP">
    <meta name="author" content="John Delaney">
    <meta name="subject" content="9/17/2017 FALL 2017 SDEV300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php include "includes/header.php"; ?>

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
	  <td><a href="./popups/signals.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/signals.jpg" width="150em" height="150em"><br>Signals - 10.99</a></td>
	  <td><a href="./popups/2112.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/2112.jpg" width="150em" height="150em"><br>2112 - 10.99</a></td>
          <td><a href="./popups/flybynight.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/flybynight.jpg" width="150em" height="150em"><br>Fly by Night - 10.99</a></td>
          <td><a href="./popups/alltheworldsastage.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/alltheworldsastage.jpg" width="150em" height="150em"><br>All the World's a Stage - 10.99</a></td>
          <td><a href="./popups/chronicles.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/chronicles.jpg" width="150em" height="150em"><br>Chronicles - 10.99</a></td>
          <td><a href="./popups/exitstageleft.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/exitstageleft.png" width="150em" height="150em"><br>Exit Stage Left - 10.99</a></td>
	</tr>
	<tr>
	  <td><a href="./popups/caressofsteel.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/caressofsteel.png" width="150em" height="150em"><br>Caress of Steel - 10.99</a></td>
	  <td><a href="./popups/movingpictures.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/moving_pictures.jpg" width="150em" height="150em"><br>Moving Pictures - 10.99</a></td>
          <td><a href="./popups/presto.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/presto.jpg" width="150em" height="150em"><br>Presto - 10.99</a></td>
          <td><a href="./popups/testforecho.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/testforecho.jpg" width="150em" height="150em"><br>Test For Echo - 10.99</a></td>
          <td><a href="./popups/afarewelltokings.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/farewelltokings.png" width="150em" height="150em"><br>A Farewell to Kings - 10.99</a></td>
          <td><a href="./popups/powerwindows.html" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" ><img src="img/powerwindows.jpg" width="150em" height="150em"><br>Power Windows - 10.99</a></td>
	</tr>





	</table>

  
<?php
 include "includes/footer.php";
?>
</body>


</html>