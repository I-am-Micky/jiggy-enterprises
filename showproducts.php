<?php 
	//include the class file
	include_once("jiggy/buyer.php");


	//create object 

	$obj = new Buyer();

	//access lists method 
	$output = $obj->adminlistProducts();
	


?>

<h2>Products list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>PRODUCT NAME</th>
							<th>SELLER_ID</th>
							<th>PRICE</th>
							<th>DESCRIPTION</th>
							<th>BRAND_id</th>
							<th>CATEGORY_id</th>
							<th>PICTURE</th>
							<th>CREATED AT</th>

							<th>Action</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['PRODUCT_ID'];
							?>
						
						<tr>
							<td><?php echo $value['PRODUCT_NAME']?></td>
							
							<td><?php echo $value['SELLER_ID']?></td>

							<td><?php echo $value['PRICE']?></td>
							
							<td><?php echo $value['DESCRIPTION']?></td>
							<td><?php echo $value['BRAND_ID']?></td>

										<td><?php echo $value['CAT_ID']?></td>

							<td> <?php if (!empty($value['PICTURE'])) {
                    ?>
                    <img src="productphotos/<?php echo $value['PICTURE'] ?>" alt="<?php echo $value['PRODUCT_NAME'] ?>PICTURE" class="img-fluid"/> 
                  <?php
                    }
                   ?></td>
							<td><?php echo $value['CREATED_AT']?></td>
							<td>  <a href="deleteproduct.php?PRODUCT_ID=<?php echo $cat_id ?>&PRODUCT_NAME=<?php echo $value['PRODUCT_NAME'];?>" class="btn btn-danger"> Delete</a></td>

						</tr>


				<?php 
			}

				?>

			



					</tbody>


	</table>