<html>
<head>
<title>Multiply</title> 
</head>
<body>
<h1> Example of a multiplication or addition table </h1>
<form action="#">
   <select name="type">
      <?php if($_GET['type']=="add"){
	echo '<option value="add" selected>Addition</option>';
      }else{
	echo '<option value="multi" selected>Multiplication</option>';
      }?>
	<option value="add">Addition</option>
	<option value="multi">Multiplication</option>
   </select>
	<input type="submit" value="Submit">
</form>
<table border="1">
<tr>
<th>0</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
</tr>
<?php
for ($x=0; $x<=10; $x++){
?>
<tr>
   <td align="center"><b>
<?php echo $x; ?></b></td>
<?php
for ($y = 1; $y <= 10; $y++)
{
?>
<td align="center">
<?php
 if ($_GET["type"]=="add"){
	 echo $x + $y;
 }elseif ($_GET["type"]=="multi"){
	 echo $x * $y;
 }else {
	 echo $x * $y;
 }
 ?></td>
<?php
}
?>
</tr>
<?php
}
?>
</table>
</body>
</html>