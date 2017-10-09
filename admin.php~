<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta name="description" content="Lab 7 web forms and php and mySQL">
    <meta name="keywords" content="HTML,PHP">
    <meta name="author" content="John Delaney">
    <meta name="subject" content="10/08/2017 FALL 2017 SDEV300">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



<?php  include "includes/header.php"; 

if ($_SESSION['Username'] == 'sdev_owner'){

  $rows = selectAllProducts();
  $max_Number = selectMaxProdIdNumber();


echo '<table class="table">';
echo '<tr>';
echo '<th> Product Name </th>';
echo '<th> Product Price </th>';
echo '<th> Product Image </th>';
echo '<th> Delete </th>';
echo '<th> Update </th>';
echo '</tr>';


		foreach ($rows as $row){
			echo'<tr><td>'.$row['ProductName'].'</td><td>'. $row['ProductPrice'] .'</td><td><img src="'.$row['ProductPicture'].'" width="150em" height="150em"></td><td><a href="delete.php?id='.$row['ProductID'].'" class="btn btn-danger" role="button">Delete</a></td><td><a class="btn btn-primary" role="button" href="update.php?id='.$row['ProductID'].'">Update</a></tr>';

		}


echo '<button class="btn btn-info" data-toggle="modal" data-target="#addProductModal">Add Products To Store</button><br>';

} else {

  echo '<p> Nothing to See Here for You Mr. '. $_SESSION['Username'] . '</p>';

}


?>

<!-- Modal -->
<div id="addProductModal" class="modal fade" role="dialog">
 <div class="modal-dialog">

   <!-- Modal content-->
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Add Products and Upload Images to the Store</h4>
     </div>
     <div class="modal-body">
       <p>Add a product to the store.</p>



	 <form action="upload.php" method="post" enctype="multipart/form-data">

	  <p>Product ID: <input name="ProdID" readonly value="<?=$max_Number['NewProdID']+1?>"></input></p>
	  <p>Product Name:<input type="text" name="ProductName"></input></p>
	  <p>Product Price:<input type="text" name="ProductPrice"></input></p>

	  

          <p>Select image to upload from your local files</p><br>
          <label class="btn btn-warning btn-sm" for="fileToUpload">
            <input type="file" name="fileToUpload" id="fileToUpload" style="display:none"
            onchange="$('#file-info').html(this.files[0].name)">Browse Images
          </label>
          <br>
          
          <p>File Selected: <span class="label label-default label-md" id="file-info">None</span></p>
       
	   
     </div>
     <div class="modal-footer">
       <button type="submit" class="btn btn-success" name="submit">Add Product</button>
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
	 </form>
    </div>

 </div>
</div>










</html>