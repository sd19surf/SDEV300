<?php 

 include('includes/header.php');
if ($_SESSION['Username'] == 'sdev_owner'){
 $_POST['ProdID'] = $_GET['id'];
 $_POST['ProductName'] = "";
 $_POST['ProductPicture'] = "";
 $_POST['ProductPrice'] = "";

  $delete = vaildateProduct('delete');
  header("Location: admin.php");
}else{
}


 include('includes/footer.php');
?>