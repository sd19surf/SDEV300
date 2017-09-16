<!DOCTYPE html>
<html>
  <!-- This <head> will be used on every page that includes this header file -->
  <head>
    <meta charset="utf-8">
    <title>RUSH Album Shopping - <?php echo $page_title; ?></title>

    <!-- Using CDN for now - can include local files later or scrap bootstrap altogether -->
    <script src="./scripts/jquery-3.2.1.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/stylesheet.css">

   <!--- Include session.php to keep the database connection open for all --->

	<?php include "session.php"; ?>

  </head>

  <!-- Open the body section - to be closed in the footer.php include -->
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand - RUSH with picture of band -->
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.php">Rush Albums</a>
        </div>

        <!-- Links to the navbar, 'floated' left -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
	     <?php if(!empty($_SESSION['LoggedInTime']) && !empty($_SESSION['Username'])){
           echo ' <li><a href="./shopping.php">Shopping</a></li>';
           echo ' <li><a href="./order.php">Order Form</a></li>';
		   } else {

		   }
	      ?>

          </ul>
          <ul class="nav navbar-nav navbar-right">
	     <?php if(!empty($_SESSION['LoggedInTime']) && !empty($_SESSION['Username'])){
			$displayName = $_SESSION['Username'];
			$displayLoginTime = time()-$_SESSION['LoggedInTime'];
		   } else {
			$displayName = "[Not Logged In]";
			$displayLoginTime = "[]";
		   }
	      ?>

            <p class="navbar-text">Signed in as <?=$displayName?> for <?=$displayLoginTime?> secs</p>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Profile <span class="caret"></span>
              </a>
	    <?php if(!empty($_SESSION['LoggedInTime']) && !empty($_SESSION['Username'])){?>
              <ul class="dropdown-menu">
                <li><a href="./includes/logout.php">Logout</a></li>
              </ul>
	    <?php } else { ?>
		<ul class="dropdown-menu">
		  <li><a href="index.php">Login</a></li>
		</ul>
	     <?php } ?>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
