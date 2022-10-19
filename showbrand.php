
	<h2>Brand list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>Brand Name</th>
							<th>Action</th>
							
							
						</tr>
					</thead>
					<tbody>

<?php 
		//include the class file
	include_once("jiggy/admin.php");


	//create object 

	$obj = new Admin();

	//access lists method 
	$output = $obj->getBrand();
	

	// echo "<pre>";
	// print_r($output);
	// echo "</pre>";



	?>
						<?php
				
							 if (count($output)> 0){
              
                  

						foreach ( $output as $key => $value) {
							   $brand_id = $value['BRAND_ID'];
							   $brand_name = $value['BRANDNAME'];
							?>
						
						<tr>
							<td><?php echo $value['BRANDNAME']?></td>
							
						
							<td>		
                  <a href="deletebrand.php?BRAND_ID=<?php echo $brand_id ?>&BRANDNAME=<?php echo $value['BRANDNAME'];?>" style="color:white;" class="btn btn-danger"> Delete</a></td>

						</tr>


				<?php 
			}
		}

				?>

				
				
				


					</tbody>


	</table>
