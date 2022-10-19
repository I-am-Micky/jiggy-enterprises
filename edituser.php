<?php 
include_once('dashboardheader.php');
include_once "jiggy/admin.php";
?>

<?php 
//FETCH EXISTING DATA 

$obj = new Admin(); 

$buyerid = $_SESSION['BUYER_ID'];
 $data = $obj->getUser($buyerid);

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
	
	$username = $_POST['username'];
	$address = $_POST['address'];
	$buyerid = $_SESSION['BUYER_ID'];


	// create object of buyer class
		include_once("jiggy/buyer.php");
	




	$buy = new buyer();
	//make refrences to insert buyer method and pass parameters
	$output = $buy->editBuyer($firstname,$lastname,$email,$username,$phone,$address,$buyerid);

	if ($output == true ){
		// redirect user to login page

		$msg =  " Your Details was successfully edited, Login again to see Changes";
		header("location:dashboard.php?m=$msg");
		exit();
		
	}else{
		$errors[]="oops something happened";
	}

}


}

?>

<main>
<div class="container">
		<div class="row" style="justify-content: center;">
			<div class="col-8">
				<h1 style="font-size:16px;" class="mt-5">Enter New Details</h1>
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
		<input type="text" name="firstname" style="border-bottom: 2px solid Green;" id="firstname" class="form-control input" value="<?php if(isset($data['FIRSTNAME'])){ echo $data['FIRSTNAME']; } ?>">
	</div>
				<div class="mb-3">
		<label class="form-label">Lastname</label>
		<input type="text" name="lastname" style="border-bottom: 2px solid Green;" id="lastname" class="form-control input" value="<?php if(isset($data['LASTNAME'])){ echo $data['LASTNAME']; } ?>">
	</div>



		<div class="mb-3">
		<label class="form-label">E-mail </label>
		<input type="text" name="email" style="border-bottom: 2px solid Green;" id="email" class="form-control input" value="<?php if(isset($data['EMAIL_ADDRESS'])){ echo $data['EMAIL_ADDRESS']; } ?>">
	</div>



	



	<div class="mb-3">
		<label class="form-label">New Username</label>
		<input type="text" name="username" style="border-bottom: 2px solid Green;" id="username" class="form-control input" value="<?php if(isset($data['USERNAME'])){ echo $data['USERNAME']; } ?>">
	</div>



	<div class="mb-3" >
		

		
		
		
		<label class="form-label">Phone number (optional)</label>

			
			
		
		
		<input type="tel" name="phone" style="border-bottom: 2px solid Green;" id="phone" class="form-control input" placeholder="+234" value="<?php if(isset($data['PHONE_NUMBER'])){ echo $data['PHONE_NUMBER']; } ?>">
	
	</div>


	

	<div class="mb-3">
		<label class="form-label">Shipping Address</label>
		<input type="text" name="address" style="border-bottom: 2px solid Green;" id="address" class="form-control input" value="<?php if(isset($data['ADDRESS'])){ echo $data['ADDRESS']; } ?>">
	</div>


	 <input type="hidden" name="buyerid" value="<?php if(isset($data['BUYER_ID'])){
            echo $data['BUYER_ID'];
          }?>">




	<div class="mb-3">
			
			<input type="checkbox" name="check" id="check1" value="check" > <label>Agree to <a>Terms and Condition</a></label>
			
		</div>	

		<div class="mb-3">

	<input type="submit" id="create" name="submit" value="EDIT DETAILS" class="btn btn-success mt-3 form-control"  disabled>
		</div>

				</form>








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
