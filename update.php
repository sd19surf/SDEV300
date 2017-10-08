<?php 

 include('includes/header.php');

 $_POST['ProdID'] = $_GET['id'];
 $_POST['ProductName'] = "";
 $_POST['ProductPicture'] = "";
 $_POST['ProductPrice'] = "";




  $update = vaildateProduct('update');



 include('includes/footer.php');
?>