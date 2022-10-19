<?php 
include_once "frontheader.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phone and Tablet</title>
	
	<style type="text/css">
.myowncolor {
			background-color:rgb(228,87,46);
			color: white;
			
			}
	</style>
</head>
<body>
	<div class="container">
		
			<div class="row" style="background-color:">
				<div class="col" style="color:; text-align: ;  ;">
								<h2 style="	color:rgb(227, 87, 46);"><a href="home.php" style="color:rgb(227,87,46)">Home</a> >> <i class="fa-solid fa-mobile-screen me-2"></i>Phone and Tablets</h2>
							</div>
			</div>

			<div class="row ">

				<!-- option 1-->
				<?php 
					include_once "jiggy/buyer.php";

					//create object 
					$obj = new Buyer();
					//make reference to list product method  

					$products = $obj->phone();

					//check if there are products 

					if (count($products)>0) {
						// loop through array using for each 
						foreach ($products as $key => $value) {
							
					
							 $prod_id = $value['PRODUCT_ID'];
							 $prodname =$value['PRODUCT_NAME'];
					?>


				<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list" id="col1">

					
					<div class="row img">
						<div class="col img">
							<img  id="imgsales" src="productphotos/<?php echo $value['PICTURE'] ?>" alt="photo" class="img-fluid p-2 img img-rounded" id="img1">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px"><?php echo $value['PRODUCT_NAME']?></p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b><?php echo number_format($value['PRICE']); ?></p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;"> &#8358 <?php echo number_format($value['OLD_PRICE'],2); ?></p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
		
			<form method="post" action="productinformation.php?ID=<?php echo $value['PRODUCT_ID'] ?>">
					<input type="hidden" name="companyname" value="<?php echo $value['COMPANY_NAME']?>">
				<input type="hidden" name="productid" value="<?php echo $value['PRODUCT_ID']?>">
				<input type="hidden" name="name" value="<?php echo $value['PRODUCT_NAME']?>">
				<input type="hidden" name="price" value="<?php echo $value['PRICE']?>">
				<input type="hidden" name="picture" value="<?php echo $value['PICTURE']?>">
				<input type="hidden" name="description" value="<?php echo $value['DESCRIPTION']?>">
				
				
				<input type="submit" class="btn myowncolor form-control"  style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="btnBuy" value="View" onclick="addCart()">
			<!-- 	<button name="btnadd" type="button" class="btn btn-success" id="addcart" onclick="addCart()">Add To Cart</button> -->
			</form>
								</div>
							</div>


					</div>	
					</div>


				</div>

				

			

			

				<?php

					}
					}

					?>
			</div>
		</div>
</body>

<?php include_once "frontfooter.php"?>
</html>