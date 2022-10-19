<?php 
	//include the class file
	include_once("jiggy/admin.php");


	//create object 

	$obj = new Admin();

	//access lists method 
	$output = $obj->listPayments();
	


?>

<h2>All Payments</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>PAYMENT_ID</th>
							<th>ORDER_ID</th>
							<th>BUYER_ID</th>
							<th>	PRODUCT_ID</th>
							<th>PAYMENT_STATUS</th>
							<th>PAYMENT_METHOD</th>
							<th>DATEPAID</th>
								<th>AMOUNT</th>
							<th>REFERENCE</th>

							<th>Action</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['PAYMENT_ID'];
							?>
						
						<tr>
							<td><?php echo $value['PAYMENT_ID']?></td>
							<td><?php echo $value['ORDER_ID']?></td>
							<td><?php echo $value['BUYER_ID']?></td>
							<td><?php echo $value['PRODUCT_ID']?></td>
							
							<td><?php echo $value['PAYMENT_STATUS']?></td>

							<td><?php echo $value['PAYMENT_METHOD']?></td>
							
							<td><?php echo $value['DATEPAID']?></td>
							<td><?php echo $value['AMOUNT']?></td>

										<td><?php echo $value['REFERENCE']?></td>

						
							<td>  <a href="processpayment.php?ORDER_ID=<?php echo $cat_id ?>" class="btn btn-danger"> Process</a></td>

						</tr>


				<?php 
			}

				?>

			



					</tbody>


	</table>