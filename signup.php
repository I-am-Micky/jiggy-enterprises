<?php 
include_once('signupheader.php');

?>

<?php 

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	//check if send message is clicked
	if($_SERVER['REQUEST_METHOD']== 'POST'){

		//validate

		// sanitize




		
		
	if (empty($_POST['firstname'])) {
		$errors['firstname'] = "Firstname Field is Required";
	}
	if (empty($_POST['lastname'])) {
		$errors['lastname'] = "Lastname Field is Required";
	}
	if (empty($_POST['email'])) {
		$errors['email'] = "Email Field is Required";
	}
	if (empty($_POST['phone'])) {
		$errors['phone'] = "Phone Field is Required";
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
	$firstname = $cmobj->sanitizeInputs($_POST['firstname']);

	$lastname = $cmobj->sanitizeInputs($_POST['lastname']);
	$email = $cmobj->sanitizeInputs($_POST['email']);
	$phone = $cmobj->sanitizeInputs($_POST['phone']);
	$password = $_POST['password'];
	$username = $_POST['username'];


	// create object of buyer class
		include_once("jiggy/buyer.php");
	




	$buy = new buyer();
	//make refrences to insert buyer method and pass parameters
	$output = $buy->buyer($firstname,$lastname,$email,$password,$username,$phone);

	if ($output == true ){
		// redirect user to login page
		header("location:signup_success.php");
	}else{
		$errors[]="oops something happened";
	}

}


}

?>

<main>
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
		<label class="form-label">Firstname</label>
		<input type="text" name="firstname" style="border-bottom: 2px solid Green;" id="firstname" class="form-control input" value="<?php if(isset($_POST['firstname'])){ echo $_POST['firstname']; } ?>">
	</div>
				<div class="mb-3">
		<label class="form-label">Lastname</label>
		<input type="text" name="lastname" style="border-bottom: 2px solid Green;" id="lastname" class="form-control input" value="<?php if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>">
	</div>



		<div class="mb-3">
		<label class="form-label">E-mail </label>
		<input type="text" name="email" style="border-bottom: 2px solid Green;" id="email" class="form-control input" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
	</div>



	<div class="mb-3">
		<label class="form-label">Password</label>
		<input type="password" name="password" style="border-bottom: 2px solid Green;" id="password" class="form-control input">
	</div>



	<div class="mb-3">
		<label class="form-label">Choose Username</label>
		<input type="text" name="username" style="border-bottom: 2px solid Green;" id="username" class="form-control input" value="<?php if(isset($_POST['username'])){ echo $_POST['username']; } ?>">
	</div>



	<div class="mb-3" >
		

		
		
		
		<label class="form-label">Phone number (optional)</label>

			
			
		
		
		<input type="tel" name="phone" style="border-bottom: 2px solid Green;" id="phone" class="form-control input" placeholder="+234" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>">
	
	</div>


	








	<div class="mb-3">
			
			<input type="checkbox" name="check" id="check1" value="check" > <label>Agree to <a>Terms and Condition</a></label>
			
		</div>	

		<div class="mb-3">

	<input type="submit" id="create" name="submit" value="SIGN UP" class="btn btn-warning mt-3 form-control" disabled>
		</div>

				</form>

				
			<p class="mt-3">
			Already Have an Account?
			<a href="login.php" target="_self">Login</a>
			</p>	







			</div>
		</div>
	</div>
</main>
<!-- J QUERY -->
<script type="text/javascript" src="jquery.min.js"></script>

	<!-- javascript -->
	<script type="text/javascript" language="Javascript">
		//$(selector).action()

	$("#check1").click(function(){
		if($(this).prop("checked")== true){
			$("#create").prop("disabled", false);
		}else{
			$("#create").prop("disabled", true);
		}
	})

			



		

	</script>
