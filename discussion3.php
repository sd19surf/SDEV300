<!DOCTYPE html>

<head>
    <title> Discussion 3 </title>
    <meta charset="UTF-8">
    <meta name="description" content="Discussion 3 example of a nested loop with html tables">
    <meta name="keywords" content="HTML,PHP">
    <meta name="author" content="John Delaney">
    <meta name="subject" content="9/4/2017 FALL 2017 SDEV300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
<h1> A random editable table with prefilled information</h1>
<h2> I believe I took a couple of varibles used to make the loops and added them together at the time of the cell printed</h2>
<table>
	<th>Column 1</th>
	<th>Column 2</th>
	<th>Column 3</th>
	<th>Column 4</th>
   <?php
	for ($i=1;$i<10;$i++){
	echo "<tr>";
	  for($j=1;$j<5;$j++){
	   echo"<td align='center'><div contenteditable='true'>";
		echo $i+$j; //prefill with something
	   echo"</div></td>";
           }
	echo "</tr>";
	}
   ?>
</table>

</body>
</html>
