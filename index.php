<?php
 	$page_title = "Login";  # changes some of <title> in header.php to 'Login'
	include "includes/header.php"
?>

<main>

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
  header("Location: shopping.php");

} elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = $_POST['username'];
	$password = md5($_POST['password']); //funny my password isn't MD5 in the db ha ha ha
	$email = $_POST['email'];

      // temporary until there is a database to compare the password to
	$checklogin = 1;


	if($checklogin == 1){
	   
		// set session variable
	  $_SESSION['Username'] = $username;
	  $_SESSION['EmailAddress'] = $email;
	  $_SESSION['LoggedInTime'] = time();
	  $_SESSION['Password'] = $password;

		header("Location: shopping.php");
	
	} else {
	  echo "<h1>Error</h1>";
	  echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
	}

   } else {
	?>

<div class="container">

	<!-- Add Rush Picture -->
  <div class="row" style="margin-top: 75px">
    <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-1">
      <img src="./img/Rush__original.jpg" class ="img-responsive" alt="Rush's Band Picture" width="400px" height="500px">
    </div>

	<br><br>
	<!-- Login Title Text -->
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>Member Login</h1>
			<br>
			<p>Thanks for visiting!
				<!--<a href="./newuser.php">click here to register</a>.-->
			</p>
		</div>
	</div>

	<!-- Login Form -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form method="post" action="index.php" name="loginform" id="loginform">
				<br>
				<div class="form-group">
					<label for="username">Username</label>
					<input
            type="text"
            class="form-control"
            id="username"
            placeholder="Enter your username here"
            name="username" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input
            type="password"
            class="form-control"
            id="password"
            placeholder="Enter your password here"
            name="password" />

				<div class="form-group">
					<label for="email">Email</label>
					<input
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter your email here"
            name="email" />

				</div>
				<input type="submit" class="btn btn-success btn-lg" name="login" id="login" value="Login"/>
			</form>
		</div>
	</div>
</div>

</main>
<?php
	include('includes/footer.php');
}
?>


</body>
</html>
