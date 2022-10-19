<?php 
	//include the class file
	include_once("jiggy/admin.php");


	//create object 

	$obj = new Admin();

	//access lists method 
	$output = $obj->getSeller();
	


?>

<h2>Sellers list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>Email</th>
							<th>Company Name</th>
							<th>Reg_date</th>
							<th>Phone 1</th>
							<th>Phone 2</th>
							<th>Username</th>
							<th>Company Address</th>

							<th>Action</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['SELLER_ID'];
							?>
						
						<tr>
							<td><?php echo $value['EMAIL_ADDRESS']?></td>
							
							<td><?php echo $value['COMPANY_NAME']?></td>

							<td><?php echo $value['REG_DATE']?></td>
							
							<td><?php echo $value['PHONE_NUMBER_ONE']?></td>
							<td><?php echo $value['PHONE_NUMBER_TWO']?></td>

										<td><?php echo $value['USERNAME']?></td>

							<td><?php echo $value['COMPANY_ADDRESS']?></td>
							<td>  <a class="btn btn-danger" href="deleteseller.php?SELLER_ID=<?php echo $cat_id ?>&COMPANY_NAME=<?php echo $value['COMPANY_NAME'];?>"> Delete</a></td>

						</tr>


				<?php 
			}

				?>

			



					</tbody>


	</table>