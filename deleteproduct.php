<?php 

include_once("signupheader.php");

 ?>

<!---Page content --->

<div class="container">
	<h1 class="mt-4 mb-3">
		<small>Delete Products</small>
	</h1>
	<?php if (isset($_REQUEST['btndelete'])){
		#delete categories
		include_once 'jiggy/admin.php';
		//create object
		$obj = new Admin();
		//make use of delete method
		$obj->deleteProduct($_REQUEST['PRODUCT_ID']);
		$obj->deleteProduct($_REQUEST['PRODUCT_NAME']);
		}


		if (isset($_REQUEST['btncancel'])) {
			#redirect to list categories
			$msg = "no action performed";
			header("Location:sellerdashboard.php?info=$msg");
			exit();
		}



	?>
		


	<div class="row">
		<div class="col-lg-8 mb-4">
			<?php 
			if (isset($_REQUEST['PRODUCT_ID'])){
			 ?>
			<div class="alert alert-danger">
				<h3>Are you sure u want to delete <?php echo $_REQUEST['PRODUCT_NAME']; ?></h3>
			</div>
			<form method="post" action="deleteproduct.php?PRODUCT_ID=<?php echo $_REQUEST['PRODUCT_ID']?>&PRODUCT_NAME=<?php echo $_REQUEST['PRODUCT_NAME']?>">
			<button type="submit" name="btndelete" class="btn btn-danger">Yes</button>
			<button type="submit" name="btncancel" class="btn btn-secondary">No</button>
			</form>
			<?php 
				}
			 ?>
		</div>
	</div>

</div>

