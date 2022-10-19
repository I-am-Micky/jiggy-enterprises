 <style type="text/css">
	
			/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>

<?php 

	session_start();
	include_once("loginheader.php");
	if (isset($_GET['m']) && $_GET['m']== 'You need to Login to access Dashboard!') {
		echo 
		"<div class='alert alert-success alert-dismissible'>
		<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
		<p>You need to Login to access Dashboard!</p>

		</div>";
	}
	

?>
	

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6">
					<h2 class="mt-3" style="font-size:30px; font-family: roboto; color: rgb(228, 87, 46);"><u>LOGIN</u></h2>

    <?php 
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					
						include_once "jiggy/buyer.php";
						// create user object
						$obj =  new Buyer();
						// make use of login method
						$loginresult = $obj->login($_POST['email'], $_POST['password']);
						$login = $obj->adminLogin($_POST['email'], $_POST['password']);
						$logins = $obj->sellerLogin($_POST['email'], $_POST['password']);

						if ($loginresult == true) {
							# redirect user to dashboard/landing page
							header("Location: dashboard.php");
							exit();
						}elseif ($login == true) {
							# redirect user to dashboard/landing page
							header("Location: admindashboard.php");
							exit();
						}elseif($logins == true){
							#redirect user to dashboard and landing page 

							header("location: sellerdashboard.php");
							exit();


						}else{
							echo "<div class='alert alert-danger'>Invalid email address or password</div>";
						}
						
					}
					
    ?>

				<form action="" method="post" class="form-control mt-3">
				
					<div class="mb-3">
		<label for="email">E-mail</label>
		<input type="email" autocomplete="email" name="email" style="border-left: 5px solid Green;" id="email" class="form-control" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
	</div>

<div class="mb-3">
		<label for="password">Password</label>
		<input type="password" name="password" style="border-left: 5px solid Green;" id="pword" class="form-control"  >
	</div>


					<button type="submit" class="btn btn-warning mt-3 form-control" ><i class="fa-solid fa-envelope"></i> Login</button>
			
		

				</form>
							<p class="mt-3">
			Don't Have an Account?
			<a href="signup.php" target="_self">Create Account</a>
			</p>
				
				
				



			</div>
		</div>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
