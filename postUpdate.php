<?php

include ('includes/header.php');
if ($_SESSION['Username'] == 'sdev_owner'){
 $_POST['ProductPicture'] ="";
 $update = vaildateProduct('update');
 header("Location: admin.php");
}else{
}
include ('includes/footer.php');

?>