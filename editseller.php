<?php 
include_once  "sellerdashboardheader.php"?>

<?php 

	include_once "jiggy/buyer.php";

	 include_once "jiggy/admin.php";
      $obj = new Admin();

      $sellerid = $_SESSION['SELLER_ID'];
      // fetch existing data
      $data = $obj->getSeller($sellerid);


      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";


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
 $sellerid = $_SESSION['SELLER_ID'];

	
	




	// $obj = new Admin();
	//make refrences to insert seller method and pass parameters
	$output = $obj->updateSeller($companyname,$companyaddress,$email,$password,$username,$phone_number_one,$phone_number_two,$sellerid);

	if ($output == true ){
		// redirect user to login page
		  $msg = "Seller was successfully Updated";
		header("location:admindashboard.php?m=$msg");
	}elseif ($output == 0){
          $msg = "No Changes was made!";
            header("Location: admindashboard.php?m=$msg");
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

				<form action="editseller.php?SELLER_ID=<?php if(isset($_REQUEST['SELLER_ID'])){
          echo $_REQUEST['SELLER_ID'];
        }?>" method="post" class="form-control" enctype="multipart/form-data">
					<div class="mb-3">
		<label class="form-label">Company name</label>
		<input type="text" name="companyname" style="border-bottom: 2px solid Green;" id="companyname" class="form-control input" value="<?php if(isset($data['COMPANY_NAME'])){ echo $data['COMPANY_NAME']; } ?>">
	</div>
				<div class="mb-3">
		<label class="form-label">Company Address</label>
		<input type="text" name="companyaddress" style="border-bottom: 2px solid Green;" id="companyaddress" class="form-control input" value="<?php if(isset($data['COMPANY_ADDRESS'])){ echo $data['COMPANY_ADDRESS']; } ?>">
	</div>



		<div class="mb-3">
		<label class="form-label">E-mail </label>
		<input type="text" name="email" style="border-bottom: 2px solid Green;" id="email" class="form-control input" value="<?php if(isset($data['EMAIL_ADDRESS'])){ echo $data['EMAIL_ADDRESS']; } ?>">
	</div>



	<div class="mb-3">
		<label class="form-label">Password</label>
		<input type="password" name="password" style="border-bottom: 2px solid Green;" id="password" class="form-control input" >
	</div>

	<div class="mb-3">
		<label class="form-label">Choose Username</label>
		<input type="text" name="username" style="border-bottom: 2px solid Green;" id="username" class="form-control input" value="<?php if(isset($data['USERNAME'])){ echo $data['USERNAME']; } ?>">
	</div>



	<div class="mb-3" >
		
		<label class="form-label">Phone number 1</label>

		<input type="tel" name="phone1" style="border-bottom: 2px solid Green;" id="phone1" class="form-control input" placeholder="+234" value="<?php if(isset($data['PHONE_NUMBER_ONE'])){ echo $data['PHONE_NUMBER_ONE']; } ?>">
	
	</div>

	<div class="mb-3" >
		<label class="form-label">Phone number 2 (optional)</label>

		<input type="tel" name="phone2" style="border-bottom: 2px solid Green;" id="phone2" class="form-control input" placeholder="+234" value="<?php if(isset($data['PHONE_NUMBER_TWO'])){ echo $data['PHONE_NUMBER_TWO']; } ?>">
	
	</div>

	<input type="hidden" name="sellerid" value="<?php if(isset($data['SELLER_ID'])){
            echo $data['SELLER_ID'];
          }?>">

	<input type="submit" id="create"  class="btn btn-warning mt-3 form-control" name="btnedit" value="Submit">


				</form>

				
			







			</div>
		</div>
	</div>