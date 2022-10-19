<!doctype html>
<?php 
include_once "frontheader.php";


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout Page </title>
</head>
<body>
		<?php 
	//include the class file
	include_once("jiggy/buyer.php");
	// session_start();


	//create object of student class

	$obj = new Buyer();


	//access lists method 
	$output = $obj->viewCart($_SESSION['BUYER_ID']);
	


?>

	<div class="container mt-2">
		<div class="row" style="justify-content: center;">
			<div class="col-8">
						<?php 

				if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnMakePayment'])) {
							include_once "jiggy/paymentclass.php";

					$obj = new Payment();
					//generate unique reference number 
					$myreference = "jiggy".rand().time();

					//make refernce
					$output = $obj->insertPayment($_SESSION['BUYER_ID'], $cat_id,$_POST['amount'],$myreference);
			
						
				}
				?>
					<form method="post" action="paystack_init.php">
			
                            		<table class="table table-bordered table-hover table-striped">
		
		<thead>
						
						<tr>
							<th>PRODUCT NAME</th>
							
							
							<th>PRICE</th>
							
							
							<th>PICTURE</th>
						
							<th>Qty</th>
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
							
							
						
							<td ><?php echo $value['PRICE']?></td>
							
					
							

							<td> <?php if (!empty($value['PICTURE'])) {
                    ?>
                    <img src="productphotos/<?php echo $value['PICTURE'] ?>" alt="<?php echo $value['PRODUCT_NAME'] ?>PICTURE" class="img-fluid"/> 
                  <?php
                    }
                   ?></td>
                   		<td><?php echo $value['QTY_ID']?></td>
                   <form class="" method="POST">
							
							<td><a  class="btn btn-danger" href="deletecartproduct.php?PRODUCT_ID=<?php echo $cat_id ?>&PRODUCT_NAME=<?php echo $value['PRODUCT_NAME'];?>"> Remove</a></td>

						</tr>


				<?php 
			}

				?>

				<input type="hidden" name="buyerid" value="<?php if(isset($_SESSION['BUYER_ID'])){
            echo $_SESSION['BUYER_ID'];
          }?>">
			



					</tbody>


					</table>

                            	
                   
         
                 <label class="form-label mt-2">
						Total Amount: <button type="button" class="btn btn-info" id="cal" name="calculator" >Calculator</button>
					</label>
				
					<input type="text" name="amount" class="form-control" id="price">
					
					<!-- hidden variables -->
					<input type="hidden" name="email" value="<?php echo $_SESSION['EMAIL_ADDRESS']?>">
	
					<input type="hidden" name="ref" value="<?php echo "$myreference"?>">


					<input type="submit" value="Make Payment" name="btnMakePayment" class="form-control btn btn-outline-success mt-2 mb-2">
				</form>
			<?php ?>            
     						 
     						</div>

			
		
			
						<div class="col-4" id="con"></div>
					

		</div>
	</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="javascript">

		need = 0;
			function add(){
				need++
				document.getElementById('price').innerHTML = need;
				
			}
	
	$(document).ready(function(){
		$('#cal').click(function(){
			$.ajax({
				url:"calculator.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},
			});
		})
	})
</script>
</body>
<?php include_once "frontfooter.php";
?>
</html>