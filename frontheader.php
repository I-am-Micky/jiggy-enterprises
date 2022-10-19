<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

<?php 
session_start();
   if (!isset($_SESSION['BUYER_ID']) && $_SESSION['mylogger']!='JIGGY'){

          $msg = "You need to Login to access this page!";
         

          // redirect to login
          header("Location: login.php?m=$msg");
          exit();
      }

?>

<! doctype html>
<html lang="en">



<head>

	<title> Jiggy Enterprise</title>
	<link rel="shortcut icon" href="images/jiggyfavicon.png" type="image/x-icon">  
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style type="text/css">
				/*Begin Media Query*/

			@media(max-width:300px){


				.car1{display: none;}
				.carr2{display: none;}
				#sell{width: 50px;
					
		
				}
				.nav-stuff{
					width: 50px;
				}
				


			}
			/*mobile phones below 480px*/
			@media(max-width:480px){


				.car1{display: none;}
				.carr2{display: none;}
				#sell{width: 80px;
					
		
				}
				.nav-stuff{
					width: 50px;
				}
				


			}
			/*mobile phones landscape*/
			@media(max-width:768px){


				.car1{display: ;}
				.carr2{display: ;}
				#sell{width: ;
				
				}
				


			}

			/*mobile phones landscape*/
			@media(max-width:740px){


				.car1{display:none ;}
				.carr2{display: none;}
				#sell{width: ;
				
				}
				


			}
			/*mobile phones below 576px*/

					@media(max-width:576px){


				.car1{display: none;}
				.carr2{display: none;}
				#sell{width: 80px;
			
				}
				


			}
			/*mobile phone landscape mode above 600px */
		

	
			/*end media query*/
			 div {
			 min-height: 00px;
			 border:px solid black;
			 }
			 .content{
			 	height: 480px;
			 	padding: 0px;
			 }
			 .dis{
			 	height: 225px;
			 }
			 .cat{
			 	height: 35px;
			 }

			.rows{
				height: 30px;
			}
			.img{
				height: 160px;
			}
			.name{
				height: 140px;
			}
			.p{
				height: 40px;
			}
			.o{
				height: 55px;
			}
			.pri{
				height: 30px;
				
			}
			.tri{
				height: 20px;
			}
			#row{background-color:rgb(254,233,225)}
			.con{
				background-color: rgb(228,87,46);
			}
			.coll2{
				background-color:rgb(254,233,225)
			}
			#img{
				height: 480px;
			}
			#sec{
				height: 220px;
				
			}
			p{
				color:#323232;
			}
			.myowncolor {
			background-color:rgb(228,87,46);
			color: white;
			
			}
			a{
				color: rgb(254, 233, 225);
				text-decoration: none;
			}
			.list{
				border: 1px solid rgb(228,87, 46);
			}
			.col-lg-2{
				height: 300px;

			}
			
			.col-md-4{
				height: 300px;
				
			}
			.col-sm-6{
				height: 300px;
			}
			.col-xl-2{
				height: 300px;
			}
			 .col-xxl-2{
				height: 300px;
			}
			  div.scroll {
        
       
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;
    }
    h3{
    	font-size: 16px;
    	font-family:verdana;
   color: rgb(254, 233, 225)
    }
				.menu{
		
		position:sticky;
		
		
		}
		.bar{
			background: rgb(228, 87, 46) ;
		}
		body{
			background-color: #F5F5F5;
		}
			.cart{ 
	  	position:fixed;
	  	bottom:500px;
	  	left:5px;
	  	/*color:rgb(228, 87, 46);*/
	   }
	   	#imgsales{
			object-fit: cover;
			height: inherit;
		}


		</style>
	</head>
	<body >
<!--  heading -->
	

		<!-- nav bar -->
		<div class="container-fluid">
			<div class="row">
				<div class="col">

		<nav class="navbar  navbar-expand-lg  header-footer-bg myowncolor "  style="border:px solid black ">
  <div class="container" >
  	<a class="navbar-brand" href="home.php"><img src="images/JIGGY (3).png" width='100'></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"style="border:1px solid black;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-stuff" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

   
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px; color: black;"><i class="fa-solid fa-dolly"></i>
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          	<li ><a type="button" class="btn btn-outline-warning form-control" href="login.php" >Log-In</a></li>
          	<li><hr class="dropdown-divider"></li>


            <li><a class="dropdown-item" href="dashboard.php"><i class="fa-solid fa-user"></i> My Account</a></li>


            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list-check"></i> Orders</a></li>



            <li><a class="dropdown-item" href=""><i class="fa-solid fa-heart-circle-plus"></i> Saved Items</a></li>

              <li class="dropdown-item ">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          
          </ul>
        </li>
        
         <li class="cart"><button type="button" id="shopcart" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#orderPlaced" onclick="shoppingCart()" style="position: relative"><i class="fa-solid fa-cart-shopping fa-2x"><span class="badge bg-danger rounded-pill" id='items_in_cart' style="position: absolute; font-size: 10px"></span></i></button></li>
       
        
      </ul>
            <form class="d-flex mt-4">
        <input class="form-control me-2" style="width: 500px;"type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
     
    </div>
  </div>
</nav>


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
                        <!-- <button type="button" id="reset_order" class="btn btn-danger" data-bs-dismiss="modal" onclick="reset()">Remove Order</button> -->
                        <button type="submit" class="btn btn-success" onclick="approve()" name="btnConfirm">Confirm Order</button>
                    </div>
                </div>
            </div>
        </div>
      </form>
</div>
</div>
</div>