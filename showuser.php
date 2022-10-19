<?php 
	//include the class file
	include_once("jiggy/admin.php");


	//create object 

	$obj = new Admin();

	//access lists method 
	$output = $obj->allUser();
	


?>

<h2>Sellers list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>Email</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Username</th>
							<th>Reg_date</th>
							<th>Phone</th>
						
							
						

							<th>Action</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['BUYER_ID'];
							?>
						
						<tr>
							<td><?php echo $value['EMAIL_ADDRESS']?></td>
							<td><?php echo $value['FIRSTNAME']?></td>
							<td><?php echo $value['LASTNAME']?></td>
							
							<td><?php echo $value['USERNAME']?></td>

							<td><?php echo $value['REG_DATE']?></td>
							
							<td><?php echo $value['PHONE_NUMBER']?></td>
							

									

							
							<td>  <a  class="btn btn-danger" href="deleteuser.php?BUYER_ID=<?php echo $cat_id ?>&USERNAME=<?php echo $value['USERNAME'];?>"> Delete</a></td>

						</tr>


				<?php 
			}

				?>

			



					</tbody>


	</table>