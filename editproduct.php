


<?php 
include_once "sellerportalheader.php";

include_once "jiggy/admin.php";

$productobj = new Admin();


//FETCH EXISTING DATA 
 $data = $productobj->getProduct($_REQUEST['PRODUCT_ID']);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

//check if the button is clicked 
if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['btneditproduct'])) {
	// validate 
	if (empty($_POST['productname'])) {
		$errors['productname']= "Product name Can Not Be empty!";
	}
		if (empty($_POST['oldprice'])) {
		$errors['oldprice']= "Please Input Old Price!";
	}
		if (empty($_POST['price'])) {
		$errors['price']= "Current Price Cannot Be Empty!";
	}
	// 	if (empty($_POST['description'])) {
	// 	$errors['description']= "Product Description Cannot be Empty";
	// }

	if (empty($errors)) {
		// code...
	//sanitize input

	include_once "jiggy/common.php";
	$cmobj = new Common;
	
	$productname = $cmobj->sanitizeInputs($_POST['productname']);
	$oldprice=$_POST['oldprice'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	  $productid = $_POST['productid'];


	//update record 

	//reference insert product 
	$output = $productobj->updateProduct($productname, $price,$oldprice, $description,$productid);

	 // check if it's successful
      if ($output == true) {
          $msg = "Products was successfully Updated";
          // redirect to listclubs
          header("Location: sellerdashboard.php?m=$msg");

        }elseif ($output == 0){
          $msg = "No Changes was made!";
            header("Location: sellerdashboard.php?m=$msg");
        }else{
          $errors[] = "Oops! Could not add club. ".$output;
       }

}
}



?>



<style type="text/css">
	.myowncolor{
		background-color: rgb(227, 87, 46);
		color: white;
	}
</style>

	<div class="container">
		<div class="row">



		<div class="col mt-2"  >

		
			
			<form class="" method="post" action="editproduct.php?productid=<?php if(isset($_REQUEST['productid'])){
          echo $_REQUEST['productid'];
        }?>" enctype="multipart/form-data">
				<h2>Edit Products</h2>
						<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-success mt-3">
          <?php echo $_REQUEST['m'];?>
        </div>

        <?php

        }?>
					 <?php 
            if (!empty($errors)){
                echo "<ul class='alert alert-danger'>";
                foreach($errors as $key => $value){
                  echo "<li>$value</li>";
                }
                echo "</ul>";
            }
          ?>
				 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">
					Name :
				</label>
				<input type="text" name="productname" class="form-control" id="productname" value="<?php if(isset($data['PRODUCT_NAME'])){ echo $data['PRODUCT_NAME']; }?>">
			</div>
		</div>

		<div class="control-group form-group">
            <div class="controls">
				<label class="form-label">
					Old Price:
				</label>
				<input type="text" name="oldprice" class="form-control"  value="<?php if(isset($data['OLD_PRICE'])){ echo $data['OLD_PRICE']; }?>">
			</div>
		</div>


		 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">
					Price:
				</label>
				<input type="text" name="price" class="form-control" value="<?php if(isset($data['PRICE'])){ echo $data['PRICE']; }?>" >
			</div>
		</div>

			
		

			



				 <div class="control-group form-group">
            <div class="controls">
					<label class="form-label">Product Details:</label>
				<textarea rows="5" cols="50" name='description' class="form-control" id="description"  maxlength="300" style="resize:none"></textarea>
			</div>

			   <?php 
                  if(!empty($errors['description'])){
                    echo "<div class='text-danger'>".$errors['description']."</div>";
                  }
              ?>

		</div>


        

           <input type="hidden" name="productid" value="<?php if(isset($data['PRODUCT_ID'])){
            echo $data['PRODUCT_ID'];
          }?>">
          

        <input type="submit" class="btn myowncolor mt-2" id="btnaddproduct" name="btneditproduct" value="Update Listing" />

			</form>
		</div>
	</div>
</div>