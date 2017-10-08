<?php 

 include('includes/header.php');
if ($_SESSION['Username'] == 'sdev_owner'){
 
  $result = selectProductsByID($_GET['id']);

      echo' <p>Update a product to the store.</p>';



      echo'<form action="postUpdate.php" method="post" enctype="multipart/form-data">';

      echo'	  <p>Product ID: <input name="ProdID" readonly value="'.$_GET['id'].'"></input></p>';
      echo'	  <p>Product Name:<input name="ProductName" value="'.$result['ProductName'].'"></input></p>';
      echo'       <p>Product Price:<input name="ProductPrice" value="'.$result['ProductPrice'].'"></input></p>';
          
      echo'    <br>';
      echo'    <button type="submit" class="btn btn-success" name="submit">Update Product</button>';
      echo' </form>';

 
}else{
}


 include('includes/footer.php');
?>