


<?php 
	//include the class file
	include_once("jiggy/admin.php");
	session_start();


	//create object of student class

	$obj = new Admin();


	//access lists method 
	$output = $obj->sellerLists($_SESSION['SELLER_ID']);
	


?>

<!doctype html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Listing</title>
		<style type="text/css">
	a{
		color: rgb(227, 87, 46);
		text-decoration: none;
	}
	body{
		background-color:#EDEDED;

	}
</style>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					
<h2>Products list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>PRODUCT NAME</th>
							
							
							<th>PRICE</th>
							<th>DESCRIPTION</th>
							
							<th>PICTURE</th>
							

							<th>Edit</th>
							<th>Remove</th>
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php
				


						foreach ( $output as $key => $value) {

							 $cat_id = $value['PRODUCT_ID'];
							?>
						
						<tr>
							<td><?php echo $value['PRODUCT_NAME']?></td>
							
							
						
							<td><?php echo $value['PRICE']?></td>
							
							<td><?php echo $value['DESCRIPTION']?></td>
							

							<td> <?php if (!empty($value['PICTURE'])) {
                    ?>
                    <img src="productphotos/<?php echo $value['PICTURE'] ?>" alt="<?php echo $value['PRODUCT_NAME'] ?>PICTURE" class="img-fluid"/> 
                  <?php
                    }
                   ?></td>
                   <form class="" method="POST">
						
							<td> <a class="btn btn-success" href="editproduct.php?PRODUCT_ID=<?php echo $cat_id ?>&PRODUCT_NAME=<?php echo $value['PRODUCT_NAME'];?>">Edit</a></td> <td>  <a  class="btn btn-danger" href="deleteproduct.php?PRODUCT_ID=<?php echo $cat_id ?>&PRODUCT_NAME=<?php echo $value['PRODUCT_NAME'];?>"> Delete</a></td>

						</tr>


				<?php 
			}

				?>

				<input type="hidden" name="sellerid" value="<?php if(isset($_SESSION['SELLER_ID'])){
            echo $_SESSION['SELLER_ID'];
          }?>">
			



					</tbody>


	</table>
				</div>
			</div>
		</div>

	</body>
	</html>