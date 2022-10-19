 <?php 
include_once  "signupheader.php"?>

<?php 

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	//check if send message is clicked
	if($_SERVER['REQUEST_METHOD']== 'POST'){

		//validate

		// sanitize




		
		
	if (empty($_POST['companyname'])) {
		$errors['companyname'] = "Company Name Field is Required";
	}
	if (empty($_POST['companyaddress'])) {
		$errors['companyaddress'] = "Company Address Field is Required";
	}
	if (empty($_POST['email'])) {
		$errors['email'] = "Email Field is Required";
	}
	if (empty($_POST['phone1'])) {
		$errors['phone1'] = "Phone Field is Required";
	}
	if (empty($_POST['phone2'])) {
		$errors['phone1'] = "Phone Field is Required";
	}
		
	if (empty($_POST['username'])) {
		$errors['username'] = "Username Field is Required";
	}
	

			if (empty($_POST['password'])) {
				$errors['password'] = "Password field is required";
			}elseif(strlen($_POST['password']) <6){
				$errors['password'] = "Password must be more than 5 characters";
			}

	//check if empty
	if(empty($errors)){
		
	

	//sanitize input
  
	include_once "jiggy/common.php";
	$cmobj = new Common;

	//make use of sanitize method
	$companyname = $cmobj->sanitizeInputs($_POST['companyname']);

	$companyaddress = $cmobj->sanitizeInputs($_POST['companyaddress']);
	$email = $cmobj->sanitizeInputs($_POST['email']);
	$phone_number_one = $cmobj->sanitizeInputs($_POST['phone1']);
	$phone_number_two = $cmobj->sanitizeInputs($_POST['phone2']);
	$password = $_POST['password'];
	$username = $_POST['username'];


	// create object of buyer class
		include_once("jiggy/buyer.php");
	




	$obj = new Buyer();
	//make refrences to insert seller method and pass parameters
	$output = $obj->seller($companyname,$companyaddress,$email,$password,$username,$phone_number_one,$phone_number_two);

	if ($output == true ){
		// redirect user to login page
		header("location:signup_success.php");
	}else{
		$errors[]="oops something happened";
	}

}


}

?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1 style="font-size:16px;" class="mt-5">Please Enter Details</h1>

				<?php  
					if (!empty($errors)) {
						echo "<ul class='alert alert-danger'>";
						foreach ($errors as $key => $value) {
							echo "<li >$value</li>";
						}
						echo "</ul>";
					
					}
				?>

				<form action="" method="post" class="form-control">
					<div class="mb-3">
		<label class="form-label">Company name</label>
		<input type="text" name="companyname" style="border-bottom: 2px solid Green;" id="companyname" class="form-control input" value="<?php if(isset($_POST['companyname'])){ echo $_POST['companyname']; } ?>">
	</div>
				<div class="mb-3">
		<label class="form-label">Company Address</label>
		<input type="text" name="companyaddress" style="border-bottom: 2px solid Green;" id="companyaddress" class="form-control input" value="<?php if(isset($_POST['companyaddress'])){ echo $_POST['companyaddress']; } ?>">
	</div>



		<div class="mb-3">
		<label class="form-label">E-mail </label>
		<input type="text" name="email" style="border-bottom: 2px solid Green;" id="email" class="form-control input" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
	</div>



	<div class="mb-3">
		<label class="form-label">Password</label>
		<input type="password" name="password" style="border-bottom: 2px solid Green;" id="password" class="form-control input" >
	</div>

	<div class="mb-3">
		<label class="form-label">Choose Username</label>
		<input type="text" name="username" style="border-bottom: 2px solid Green;" id="username" class="form-control input" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
	</div>



	<div class="mb-3" >
		

		
		
		
		<label class="form-label">Phone number 1</label>

			
			
		
		
		<input type="tel" name="phone1" style="border-bottom: 2px solid Green;" id="phone1" class="form-control input" placeholder="+234" value="<?php if(isset($_POST['phone1'])){ echo $_POST['phone1']; } ?>">
	
	</div>

	<div class="mb-3" >
		

		
		
		
		<label class="form-label">Phone number 2 (optional)</label>

			
			
		
		
		<input type="tel" name="phone2" style="border-bottom: 2px solid Green;" id="phone2" class="form-control input" placeholder="+234" value="<?php if(isset($_POST['phone2'])){ echo $_POST['phone2']; } ?>">
	
	</div>


		




	
	<div class="mb-3">
			
			<input type="checkbox" name="check" id="check1" value="check" > <label>Agree to <a>Terms and Condition</a></label>
			
		</div>	



	<input type="submit" id="create"  class="btn btn-warning mt-3 form-control" name="submit" value="SIGN UP ">


				</form>

				
			<p class="mt-3">
			Already Have a Seller Account?
			<a href="signin.php" target="_self">Login</a>
			</p>	







			</div>
		</div>
	</div>