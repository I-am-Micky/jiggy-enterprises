<!-- <?php 
// include_once("dashboardheader.php");

?> -->


 
 
	<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
	<title><?php 
              if(isset($_SESSION['USERNAME'])){
                echo $_SESSION['USERNAME'];
              }
             ?> Dashboard</title>

<link rel="shortcut icon" href="images/jiggyfavicon.png" type="image/x-icon">  
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">



		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style type="text/css">

	/*begin media query */

	@media(max-width:450px){


				.car1{col-12}
				
					
		
				
				


			}

	/*End media Query*/
	div{
		border: px solid black;
		min-height: 00px;
	}
	#head{background-color:rgb(254,233,225)}

	.myowncolor {
			background-color:rgb(228,87,46);
			
			}
			body{
		background-color:#EDEDED;
		}
		.input{
    border: none;
    background-color: transparent;
    resize: none;
    outline: none;
}
a{
	text-decoration: none;
		color: rgb(228, 87, 46);
}
.cart{ 
	  	position:fixed;
	  	bottom:500px;
	  	left:5px;
	  	/*color:rgb(228, 87, 46);*/
	   }

	   		/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
		
</style>
<body>
	<?php  
    //start session
    session_start();

     if (!isset($_SESSION['BUYER_ID'])){

          $msg = "You need to Login to access Dashboard!";
         

          // redirect to login
          header("Location: login.php?m=You need to Login to access Dashboard!");
          exit();
      }
  ?>

	<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-dismissible alert-success mt-3">

          <?php echo $_REQUEST['m'];?>
            	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>


<!--navigation-->

	<nav class="navbar navbar-expand-md navbar-light myowncolor "  style="border:px solid black ">
  <div class="container-fluid" >
    
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      	<li class="nav-item">
          <a class="nav-link active mt-2" aria-current="page" href="Home.php"><i class="fa-solid fa-arrow-left"></i>Home</a>
        </li>
        <li class="nav-item">
         <img src="images/JIGGY (3).png" alt="logo" style="height: 60px" class="img-fluid">
        </li>


        <li>
        	
        	<a style="color:rgb(254, 233, 225);" class="nav-link  mt-2" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php 
              if(isset($_SESSION['USERNAME'])){
                echo $_SESSION['USERNAME'];
              }
             ?>
            </a>
        </li>

         <li class="nav-item mt-2">
            <a class="nav-link" href="logout.php" style="color:rgb(254, 233, 225);">Logout</a>
          </li>

          <li class="nav-item mt-2">
          		<button type="button" id="shopcart" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#orderPlaced" onclick="shoppingCart()" style="position: relative"><i class="fa-solid fa-cart-shopping fa-2x"><span class="badge bg-danger rounded-pill" id='items_in_cart' style="position: absolute; font-size: 10px"></span></i></button>
          </li>
 
      </ul>
          
     
    </div>
  </div>
</nav>



<main style="height:500px">
	<div class="container mt-2">
		<div class="row " style="justify-content:space-around;" >
			<div class="col-3" style="border:px solid gray; background-color: #FFFFFF;" >

				<div class="row">
					<div class="col">
						<a href="dashboard.php"><p class=" mt-2"> <i class="fa-brands fa-android fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>My Jiggy Account</p></a>
					</div>
				</div>


				<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-list-check fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>Orders</p></a>
					</div>
				</div>


								<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-inbox fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>Inbox</p></a>
					</div>
				</div>


								<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-chalkboard-user me-2 mt-2 fa-1x" style="color:rgb(227, 87, 46)"></i>Reviews</p></a>
					</div>
				</div>


								<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-heart-circle-check me-2 mt-2 fa-1x" style="color:rgb(227, 87, 46)"></i>Saved Items</p></a>
					</div>
				</div>


								<div class="row">
					<div class="col">
						<a href=""><p class="mt-2"><i class="fa-solid fa-clock-rotate-left me-2 mt-2 fa-1x" style="color:rgb(227, 87, 46)"></i>Recently Viewed</p>
					</div>
				</div>


				

						<div class="row">
					<div class="col">
						<a href=""><p class="mt-2">Address Book</p>
					</div>
				</div>

						<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2">Change Password</p></a>
					</div>
				</div>

					

			</div>





			<!-- dashboard aspect -->

			<div class="col-9 " style="border:px solid gray;">
				<div class="row">
					<div class="col-12" style="border:2px solid gray; background-color: #FFFFFF;">
						<h2 >Account Overview</h2>
						
					</div>
				</div>



				<!-- Details Box -->

				<div class="row " style="justify-content:space-around; height: 200px;">
					<div class="col-6 " style="border:2px solid gray; ">
						<div class="row" style="height:40px">
							<div class="col-10  " style="border:2px solid gray; background-color: #FFFFFF;">
								<small class="mt-2">ACCOUNT DETAILS</small>
							</div>
							<div class="col-2  " style="border:2px solid gray; justify-content: flex-start; background-color: #FFFFFF;">
								<a href="edituser.php?BUYER_ID=<?php echo $_SESSION['BUYER_ID'] ?>" ><i class="fa-solid fa-pencil mx-auto mt-2" style="color:rgb(227, 87, 46)"></i></a>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col">
									<p id="username"><b><?php 
              if(isset($_SESSION['USERNAME'])){
                echo $_SESSION['USERNAME'];
              }
             ?></b></p>
								<p id="email"> <b><?php 
              if(isset($_SESSION['EMAIL_ADDRESS'])){
                echo $_SESSION['EMAIL_ADDRESS'];
              }
             ?></b></p>
							</div>
						</div>
						<div class="row mt-4" style="height:50px;">
							<div class="col mt-2" style="border:2px solid gray; background-color: #FFFFFF;">
								<a href="" style="color:rgb(227, 87, 46);text-decoration: none;" >CHANGE PASSWORD</a>
							</div>
						</div>
					</div>



					<div class="col-6 " style="border:2px solid gray; ">
						<div class="row" style="height:30px">
							<div class="col" style="border:2px solid gray; background-color: #FFFFFF;">
								<small>ADDRESS BOOK</small>
							</div>
						</div>
						<div class="row">
							<div  class="col">
								<p id="shipping"><b>YOUR SHIPPING ADDRESS IS:</b></p>
								<p id="address">
								<?php 

								if (isset($_SESSION['ADDRESS'])) {
								echo $_SESSION['ADDRESS'];
								}

								?>
								</p>

							</div>
						</div>

					</div>
				</div>



			</div>
		</div>
				</main>




	<footer  class=" header-footer-bg mt-2">
		<div class="container-fluid" style="background: #323232 ;">
			<div class="row">
				<div class="col-12">
					<div class='row' style="background-color: #282828;">
				
				<div class="col-4 py-3 mt-3" >
					<img src="images/JIGGY (3).png" alt="logo" style="height:80px; " class="img-fluid">
				</div>
				<div class="col-8 mt-3">
					<h2 style="font-size:16px;color: white;">New to JiGGY?</h2>
					<p style="font-size:10px;color: white;">Subscribe to JiGGY to Get News Letter And Updates</p>
					
						
						<input type="text"  class="" style="width: 50%; border-radius: rounded" name="email" placeholder="Enter Email Address">
						<input type="submit" name="gender" value="Male" class="btn btn-outline-warning">

						<input type="submit" name="gender" value="Female" class="btn btn-outline-warning">

				</div>
				<div class="col">
						
				</div>
			</div>
				</div>




				<div class="row">
					<div class="col-4" >
				
						<ul style="list-style-type: none;">
				<li>	<a href="comingsoon.php" style="color:rgb(254,233,225)">	Help Center</a><br>
				<li>	<a href="comingsoon.php" style="color:rgb(254,233,225)">	How to Shop on JiGGY? </a> </li><br>
					<li>	<a href="comingsoon.php" style="color:rgb(254,233,225)">	Delivery and Timelines </a> </li><br>
							<li> <a href="comingsoon.php" style="color:rgb(254,233,225)">	Report a Product </a> </li><br>
								<li>	<a href="comingsoon.php" style="color:rgb(254,233,225)"> Ship to Anywhere in Nigeria </a> </li><br>
								</ul>
					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">

						<li> <a href="comingsoon.php" style="color:rgb(254,233,225)"> About Us </a> </li> <br>
						<li> <a href="comingsoon.php" style="color:rgb(254,233,225)"> Terms and Condition. </a></li><br>
						</ul>

					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">
						<li> <a href="comingsoon.php" style="color:rgb(254,233,225)"> Sell on JiGGY </a> </li><br>
						<li> <a href="comingsoon.php" style="color:rgb(254,233,225)"> Become a Sales Consultant </a> </li><br>
					</ul>

					</div>
					<div style="color:white; text-align: center;">Copyright &copy;</div>
				</div>
			</div>
		</div>



	
	</footer>
</body>

		<!-- Order Modal -->

		<?php 
	//include the class file
	include_once("jiggy/buyer.php");
	// session_start();


	//create object of student class

	$obj = new Buyer();


	//access lists method 
	$output = $obj->viewCart($_SESSION['BUYER_ID']);
	


?>
		<div class="modal fade" id="orderPlaced" tabindex="-1" aria-labelledby="MetaMall" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md">
                <div class="modal-content" id="content_modal">
                    <div class="modal-header">
                        <h5 modal-dialog-scrollable id="MetaMall">JIGGY Cart</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                            	<div class="col-12 text-center">
                            		<h2>Product Description</h2>

                            		<form method="post" action="checkout.php">
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
							
							
						
							<td><?php echo $value['PRICE']?></td>
							
					
							

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

                            	</div>
                              
                            <div class="row">
                            	<div class="col-12">
                            		
                            		</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
             <!--            <button type="button" id="reset_order" class="btn btn-danger" data-bs-dismiss="modal" onclick="reset()">Remove Order</button> -->
                        <button type="submit" class="btn btn-success" onclick="approve()" name="btnConfirm">Confirm Order</button>
                    </div>
                </div>
            </div>
        </div>
	




<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$('#orders').click(function(){
			
		})
	})
</script>

<!--  -->
</html>