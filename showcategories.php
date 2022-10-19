	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style type="text/css">
	#body{
			background-color: #F5F5F5;
		}
</style>
<?php 
		//include the class file
	include_once("jiggy/admin.php");


	//create object of student class

	$obj = new Admin();

	//access lists method 
	$output = $obj->getCategory();
	

	// echo "<pre>";
	// print_r($output);
	// echo "</pre>";


	?>
	<body >
		<div class="container">
			<div class="row">
				<div class="col" id="body">
	<h2>Category list</h2>
	<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>Category Name</th>
							<th>Category Image</th>
							<th>Category Icon</th>
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
	$output = $obj->getCategory();
	

	// echo "<pre>";
	// print_r($output);
	// echo "</pre>";



	?>
						<?php
				
							 if (count($output)> 0){
              
                  

						foreach ( $output as $key => $value) {
							   $cat_id = $value['CAT_ID'];
							   $cat_name = $value['CATEGORY_NAME'];
							?>
						
						<tr>
							<td><?php echo $value['CATEGORY_NAME']?></td>
							<td><?php echo $value['CATEGORY_IMAGE']?></td>
							<td><?php echo $value['CATEGORY_ICON']?></td>
							
						
							<td>		
                  <a href="deletecat.php?CAT_ID=<?php echo $cat_id ?>&CATEGORY_NAME=<?php echo $value['CATEGORY_NAME'];?>" style="color:white;" class="btn btn-danger"> Delete</a></td>

						</tr>


				<?php 
			}
		}

				?>

				
				<!-- <?php 
				//include_once("jiggy/buyer.php");

				//$obj = new Buyer

				$out = $obj->addCategory();

				?> -->
				<div id="result">


				</div>



					</tbody>


	</table>
</div>
</div>
</div>
</body>


	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript"  language="Javascript">
		
		// $(document).ready(function(){
		// 	$("#btnadd").click(function(){

		// 		$.ajax({
		// 			url:"addcategories.php",
		// 			type:"POST",
		// 			success:function(data){
		// 			$('#result').html(data);
		// 		},
		// 	});
		// });



	</script>
