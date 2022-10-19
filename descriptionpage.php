<?php 
 include_once "frontheader.php";

	include_once "jiggy/admin.php";


	//create object of student class

	$obj = new Admin();
	// $product_id = $_POST['PRODUCT_ID'];

	//access lists method 
	// $output = $obj->description($product_id);
	
?>
<style type="text/css">
	div{
		border: px solid black ;
		min-height: 00px;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="row">
				<div class="col-4">
					<div class="row">
						<div class="col">
							
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2">
						</div>
					</div>

					<div class="row">
						<div class="col-2"></div>
							<div class="col-2"></div>
								<div class="col-2"></div>
									<div class="col-2"></div>
										<div class="col-2"></div>
											<div class="col-2"></div>
					</div>

				</div>


					<!-- description section -->

				<div class="col-8">
					<div class="row">
						<div class="col">
							<div class="row" style="height:100px">
								<div class="col" >
									<p style="text-align:center; font-size: 20px;" >Thunder Rock Array Speaker</p>
								</div>
							</div>

							<div class="row" style="height:100px">
								<div class="col">
									<div class="row">
										<div class="col-6">
											<p>Flash Sales</p>
										</div>
										<div class="col-6">
											<!-- timer stays here -->
											<p>Time Left: 22h : 45m : 52s</p>
										</div>

									</div>

									<div class="row">
										<div class="col">
											
										</div>

									</div>
								</div>
							</div>

							<div class="row" style="height:100px">
								<div class="col"></div>
							</div>

							<div class="row" style="height:50px">
								<div class="col">
									<button class="btn btn-warning form-control mt-2" type="submit" name="addtocart" id="addtocart">ADD TO CART</button>
								</div>
							</div>


						</div>

					</div>

				</div>
			</div>
		</div>


			<!-- Delivery Section -->

		<div class="col-4">
			<div class="row">
				<div class="col">
					<p>DELIVERY & RETURNS</p>
				</div>
			</div>
				<!-- Choose Location -->
				<div class="row">
					
					<div class="col">
						
					</div>
				</div>

					<!-- delivery options  -->
				<div class="row">
					<div class="col">
						<p>Choose your location</p>
						<form class="" method="post" action="" enctype="multipart/form-data">
									<select name="state" class="form-select">
										<option>Choose Your State</option>	
						<?php 

							include_once "jiggy/buyer.php";


							//create object 
							$obj = new Buyer();

							//make reference to get method 

							$output =$obj->getStates();

							foreach ($output as $key => $state){
								$state_id =$state['STATE_ID'];
								$state_name =$state['STATE_NAME'];
								 echo "<option value='$state_id'>$state_name</option>";
							}



						?>


									</select>

														<select name="lga" class="form-select mt-1">
							


						<?php 

						$stateid = $_REQUEST['STATE_ID'];

							include_once "jiggy/buyer.php";
								

							//create object 
							$obj = new Buyer();

							//make reference to get method 

							$lgas = $obj->getLga($stateid);

						$option = "<option value=''>Choose LGA</option>";

if(!empty($lgas)){
	foreach ($lgas as $key => $value) {
		$lgaid = $value['lga_id'];
		$lganame = $value['lga_name'];

		$option .="<option value='$lgaid'>$lganame</option>";
	}

}
	echo "$option";


						?>


									</select>

						</form>
					</div>
					<div class="row">
						<div class="col-2">
							<i class="fa-solid fa-truck fa-2x"></i>
						</div>
						<div class="col-8">
							<p style="font-size:16px;">Door Delivery</p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<i class="fa-solid fa-box-archive fa-2x"></i>
						</div>
						<div class="col-8">
							<p style="font-size:16px;">Pick Up Station</p>
						</div>
					</div>
					<div class="row">
						<div class="col-4">
							<i class="fa-solid fa-box-archive fa-2x"></i>
						</div>
						<div class="col-8">
							<p style="font-size:16px;">Pick </p>
						</div>
					</div>


				</div>



		</div>
	</div>
</div>