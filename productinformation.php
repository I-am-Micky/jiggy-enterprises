<style type="text/css">
		.img {
  /* override other styles to make responsive */
  width: auto   !important;
  height: auto   !important;
}
</style>

<?php 
include_once "frontheader.php";

?>

<?php 

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btnAdd'])) { 
	// refernce insert method 						

		include_once "jiggy/buyer.php";
	
	$obj = new Buyer();


	//ref
		$product_id  = $_POST['productid'];
		$qty = $_POST['qty'];
		// $buyer_id = $_POST['buyerid'];
	$cart =$obj->addCart($_SESSION['BUYER_ID'], $product_id, $qty);

	//check if true 
	if($cart == true){
		$msg="Product was successfully added to cart";
			//redirect to landing page 
       	header("location:productinformation.php?m=$msg");
       	exit();
	}

}

?>
<style type="text/css">




  h4{
    color: #fff;
  }

  h4:hover{
    color:#000;
  }


  .card-img-top{
    width: 230px !important;
    height: 230px !important;
    position: !important;
  }

  div .card-body h5{
   color: #0cce6b
  }


  /*Product Information Page*/

.productinfoimg{
    height: 400px;
    /*border: 1px solid #a2a2a2;*/
   /* box-shadow: 0px 0px 2px 2px;*/
    margin-bottom: 30px;
  }


 /* .card-imginfo-top{
    width: inherit!important;
    height: inherit !important;
    box-shadow: 0px 0px 3px 1px #a2a2a2;

  }*/
 
  #card-title-div{
    border-top: 1px solid #a4a5a6;
  }

  #carddescriptiondiv{
    border-top: 1px solid #a4a5a6;
  }

  #cardbuttondiv{
    border-top: 1px solid #a4a5a6;
  }


  .sideprodinfodiv{
    
    box-shadow: 0px 0px 3px 1px #a4a5a6;
    text-align: center;
  }

  #btnfeedback{
    background-color: #ff8f1f; /*orange*/
    border: 1px solid #fff;
    color: #fff;
  }





 
  	.myowncolor{
		background-color: rgb(227, 87, 46);
		color: white;
	}
</style>


 <!-- Body 0f Page -->
 <body style="background-color:#EDEDED;
">

 <div class="container mt-3">
 	<div class="row">

 	 			<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnBuy'])) {

	
include_once "jiggy/buyer.php";
	

	 ?>
 			<!-- 1st div -->

 		<div class="col-md-8 mt-4">



 			<div class="productinfoimg mt-2 mb-3">
					<img class="card-imginfo-top img-fluid img " src="productphotos/<?php echo $_POST['picture'];?>" alt="Card image">
					  <div class="card-body mt-4">

					  	<div id="card-title-div" class="mb-5">
					  		
					  	  <h1 class="card-title" id="productname"><?php echo $_POST['name'];?></h1>
					    </div>

					    <div class="mb-5" id="carddescriptiondiv">
					 	   <h3 class="card-text" style="color:black;">Description</h3>
					 	   <p class="card-text"><?php echo $_POST['description'];?></p>
					    </div>

					    <div class="mb-5" id="cardbuttondiv">
					    
					    </div>

					  </div>
				</div>

			
 			
 		</div>
 		<!-- End of 1st Div -->




 		<!-- 2nd div -->

 	<div class="col-md-4 mt-4 ">
 			


 			<div id="prodpricediv" class="sideprodinfodiv mb-3">
 				<h1>&#8358 <?php echo $_POST['price'];?></h1>
 			</div>
 			<div class="sideprodinfodiv mb-3">
 				<p>From</p>
 			</div>
 		
 			<div class="sideprodinfodiv mb-3 p-3" id="productusername" style="display:flex; flex-wrap: wrap; justify-content: center;">
 				<h1><?php echo $_POST['companyname'];?></h1>
 				
 			</div>

 			<div class="sideprodinfodiv mb-3 p-3" id="productfeedbackdiv">




 				<form method="post" action="">
 					<label class="form-label">Choose Quantity</label>
 					<select name="qty" class="form-select">
 						<!-- <option value="1">1</option> -->

					<?php 
										
						
						
	


							$obj = new Buyer();



				

					//make reference 
					$qty = $obj->getQty();

					foreach ($qty as $key => $quantity){
                      $qty_id = $quantity['QTY_ID'];
                      $qty_name = $quantity['QTY'];

                      echo "<option value='$qty_id'>$qty_name</option>";
                    }
                

					?>
 					</select>
 		

 					<input type="hidden" name="productid" value="<?php echo $_POST['productid']?>">
 						

 				
 				<button type="submit" class="btn btn-success mt-2 mb-2 form-control" name="btnAdd">
 				<b>ADD TO CART</b>
 				</button>

 				
 			</form>

 					
 			</div>

 			<div class="sideprodinfodiv mb-3 p-2" id="productsafetyinfo">
 				<h5>Safety Information</h5>

 				<ol style="text-align: start">

 				
 					
 					<li>
 						 Inspect the item and ensure it's exactly what you want
 					</li>
					
 					<li>
 						 On delivery, check that the item delivered is what was expected
 					</li>
					
 					<li>
 						 Only pay when you're satisfied
 					</li>
					
 				</ol>
 			</div>
 		

 	</div>
 			
 		<!-- End of 2nd Div -->

 		  <?php
      
  }


        ?>
 	</div>

 </div>
</body>
 