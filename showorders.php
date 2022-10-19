<?php 
	//include the class file
	include_once("jiggy/admin.php");


	//create object 

	$obj = new Admin();

	//access lists method 
	$output = $obj->listOrders();
	


?>

<h2>All Orders</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>ORDER_ID</th>
							<th>ORDER_DATE</th>
							<th>SHIPPING_ADDRESS</th>
							<th>	BUYER_ID</th>
							<th>CITY</th>
							<th>STATUS</th>
							<th>STATE_ID</th>
							<th>ZIPCODE</th>

							<th>Action</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['ORDER_ID'];
							?>
						
						<tr>
							<td><?php echo $value['ORDER_ID']?></td>
							
							<td><?php echo $value['ORDER_DATE']?></td>

							<td><?php echo $value['SHIPPING_ADDRESS']?></td>
							
							<td><?php echo $value['BUYER_ID']?></td>
							<td><?php echo $value['CITY']?></td>

										<td><?php echo $value['STATUS']?></td>

						<!-- 	<td> <?php if (!empty($value['PICTURE'])) {
                    ?>
                    <img src="productphotos/<?php echo $value['PICTURE'] ?>" alt="<?php echo $value['PRODUCT_NAME'] ?>PICTURE" class="img-fluid"/> 
                  <?php
                    }
                   ?></td> -->
							<td><?php echo $value['STATE_ID']?></td>
								<td><?php echo $value['ZIPCODE']?></td>
							<td>  <a href="deleteorder.php?ORDER_ID=<?php echo $cat_id ?>" class="btn btn-danger"> Delete</a></td>

						</tr>


				<?php 
			}

				?>

			



					</tbody>


	</table>