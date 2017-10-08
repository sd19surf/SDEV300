<?php 

 include('includes/header.php');

 $_POST['ProdID'] = $_GET['id'];
 $_POST['ProductName'] = "";
 $_POST['ProductPicture'] = "";
 $_POST['ProductPrice'] = "";

  $delete = vaildateProduct('delete');



 include('includes/footer.php');
?>