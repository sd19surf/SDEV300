<?php
function isLoginSessionExpired() {
	$login_session_duration = 1800; 
	$current_time = time(); 
	if(isset($_SESSION['LoggedInTime']) and isset($_SESSION["Username"])){  
		if(((time() - $_SESSION['LoggedInTime']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}

function selectAllProducts() {

      $sql = "SELECT ProductID,ProductName,ProductPrice,ProductPicture FROM Product";

      $mysqli = connectdb();
      $rows=array();

      if ($result = $mysqli->query($sql)){
         
	    while($r = $result->fetch_assoc()){
              $rows[] = $r;
            }
       }
       $close = $mysqli->close();

    return $rows;
                     

}

// Grabs the highest Product ID number

function selectMaxProdIdNumber() {

    $sql = "SELECT MAX(ProductID) As NewProdID FROM Product";
    $max_Number = 0;
    $mysqli = connectdb();

      if ($result = $mysqli->query($sql)){
         
	   $max_Number = $result->fetch_assoc();
      }
       $close = $mysqli->close();

    return $max_Number;
}     

//Checks the product into the database duplicates don't matter

function vaildateProduct($type){

       // could reuse here for updating/deleting/adding
       // using $type to determine what to do with the product

        $productid = $_POST['ProdID'];
        $productname = $_POST['ProductName'];
        $productpicture = $_POST['ProductPicture'];
        $productprice = $_POST['ProductPrice'];


	$product = new ProductClass($productid,$productname,$productpicture,$productprice);

        switch ($type) {
         case "delete":
               $result = deleteProduct($product);
               break;
         case "insert":
	       $result = insertProduct($product);
               break;
         case "update":
               $result = updateProduct($product);
               break;
         }

}

function insertProduct($product){

    $productid = $product->getProductid();
    $productname = $product->getProductname();
    $productpicture = $product->getProductpicture();
    $productprice = $product->getProductprice();


    $sql = "INSERT INTO product (ProductID,ProductName,ProductPicture,ProductPrice) VALUES ('$productid','$productname','$productpicture','$productprice')";
   
    $mysqli = connectdb();
   
    $success = "false";

      if ($result = $mysqli->query($sql)){
         
	   $success = "true";
      }
       $close = $mysqli->close();
       return $success;
}

function deleteProduct($product){

    $productid = $product->getProductid();
  
    $sql = "DELETE FROM product WHERE ProductID = '$productid'";
   
    $mysqli = connectdb();
   
    $success = "false";

      if ($result = $mysqli->query($sql)){
         
	   $success = "true";
      }
       $close = $mysqli->close();
}



function updateProduct($product){

}

// connects to the database
function connectdb() {
// Put this in the header to keep the database session alive as the user or admin shops or edits
// I would normally move this information to a file called config.ini in a folder below root but I included it for ease of grading.

$dbhost = "localhost"; // this will ususally be 'localho st', but can sometimes differ
$dbname = "sdev_store"; // the name of the database that you are going to use for this project
$dbuser = "sdev_owner"; // the username that you created, or were given, to access your database
$dbpass = "sdev300"; // the password that you created, or were given, to access your database

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysqli_error());
mysqli_select_db($conn, $dbname) or die("MySQL Error: " . mysqli_error());

return $conn;

}

 // Class to construct Products with getters/setter
class ProductClass {
     // property declaration
     private $ProductID="";
     private $ProductName="";
     private $ProductPrice="";
     private $ProductPicture="";

         // Constructor
     public function __construct($ProductID,$ProductName,$ProductPicture,$ProductPrice)     { 
      $this->productid = $ProductID;
       $this->productname = $ProductName;
       $this->productpicture = $ProductPicture;
       $this->productprice = $ProductPrice;
      }
          // Get methods
     public function getProductId (){
      return $this->productid;     
	}     
      public function getProductname (){ 
      return $this->productname;
     } 
    public function getProductpicture (){ 
     return $this->productpicture;
     } 
    public function getProductprice (){ 
     return $this->productprice;
     }      
 
    // Set methods
      public function setProductId ($value){ 
     $this->productid = $value;
      } 
      public function setProductname ($value){ 
     $this->productname = $value;
      }
      public function setProductpicture ($value){
     $this->productpicture = $value; 
     }    
      public function setProductprice ($value){  
     $this->productprice = $value; 
     }           
  } // End Productclass


 // Class to construct Purchases with getters/setter
class PurchaseClass {
     // property declaration
     private $CustomerID="";
     private $AllItems="";
     private $TotalCost="";
     private $PurchaseDate="";

         // Constructor
     public function __construct($CustomerID,$AllItems,$TotalCost,$PurchaseDate)     { 
      $this->productid = $CustomerID;
       $this->productname = $AllItems;
       $this->productpicture = $TotalCost;
       $this->productprice = $PurchaseDate;
      }
          // Get methods
     public function getCustomerId (){
      return $this->customerid;     
	}     
      public function getAllitems (){ 
      return $this->allitems;
     } 
    public function getTotalcost (){ 
     return $this->totalcost;
     } 
    public function getPurchasedate (){ 
     return $this->purchasedate;
     }      
 
    // Set methods
      public function setCustomerId ($value){ 
     $this->customerid = $value;
      } 
      public function setAllitems ($value){ 
     $this->allitems = $value;
      }
      public function setTotalcost ($value){
     $this->totalcost = $value; 
     }    
      public function setPurchasedate ($value){  
     $this->purchasedate = $value; 
     }           
  } // End Productclass





?>