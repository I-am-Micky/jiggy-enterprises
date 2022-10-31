



<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

<?php 
session_start();


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

		<link rel="stylesheet" type="text/css" href="jquery.min.js">

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
				background-color:rgb(254,233,225);
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
			  font-family:  Roboto, sans-serif;
		}
		.cart{ 
	  	position:fixed;
	  	bottom:500px;
	  	left:5px;
	  	/*color:rgb(228, 87, 46);*/
	   }
	   button{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  /*border:2px solid white;*/
}

	.p:hover{
		background-color:rgb(228, 87, 46) ;
		color:rgb(254, 233, 225);
	}
	img{

	}
	.myowncolor{
		background-color: rgb(227, 87, 46);
		color: white;
	}
	.buttoncolor{
		background-color: #FF9900;
		color: white;
	}
	video {
  /* override other styles to make responsive */
  width: 100%    !important;
  height: auto   !important;
}
#imgsales{
	object-fit: cover;
}
 



		</style>
	</head>
	<body >
<!--  heading -->
<header>
		<div class="container " id="row">
			<div class='row'>
				
				<div class="col-4 py-3" >
					<img src="images/JIGGY (3).png" alt="logo" style="height:80px" class="img-fluid">
				</div>
				<div class="col-8 py-2">
					<div class="row mt-5" style="justify-content:flex-end;">
						<div class="col-4">
							<a type="button" class="btn myowncolor form-control button btn-sm" href="sellersignup.php" style="color:rgb(254, 233, 225);  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" id="sell" >Sell on Jiggy</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

		<!-- nav bar -->
		<div class="container-fluid">
			<div class="row">
				<div class="col">

		<nav class="navbar  navbar-expand-lg  fixed-top header-footer-bg myowncolor sticky-top"  style="border:px solid black ">
  <div class="container-fluid" >
  	<a class="navbar-brand" href="home.php"><img src="images/JIGGY (3).png" width='100'></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:1px solid black;">
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


            <li><a class="dropdown-item" href=""><i class="fa-solid fa-list-check"></i> Orders</a></li>



            <li><a class="dropdown-item" href=""><i class="fa-solid fa-heart-circle-plus"></i> Saved Items</a></li>
             <li class="dropdown-item ">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          
          </ul>
        </li>
        
         <li class="cart">	<button type="button" id="shopcart" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#orderPlaced" onclick="shoppingCart()" style="position: relative"><i class="fa-solid fa-cart-shopping fa-2x"><span class="badge bg-danger rounded-pill" id='items_in_cart' style="position: absolute; font-size: 10px"></span></i></button></li>
        
      </ul>
            <form class="d-flex mt-4">
        <input class="form-control me-2" style="width: 500px;"type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit"><i class="fa-brands fa-searchengin fa-2x"></i></button>
      </form>

      
     
    </div>
  </div>
</nav>
</div>
</div>
</div>
<!-- Menu -->
		<body id="con">


		<div class="container con">

			<div class="row ">
				<div class="col-md-12 ">
					<div class="row " style="justify-content: space-between;">
					<div class="col-lg-3 col-md-3 col-sm-12 coll2 content p-2" style="border:px solid black;">


							<div class="row">
							<div class="col-12 cat">
							<a href="supermarket.php"><p class="p"><i class="fa-solid fa-store me-2"></i><span >Supermarket</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-md-12 cat">
						<a href="health.php">	<p class="p"><i class="fa-solid fa-heart-pulse me-2"></i><span class="mt-2">Health</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col cat">
								<a href=""><p class="p"><i class="fa-solid fa-house me-2"></i><span class="mt-2">Home and Office</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-12 cat">
									<a href="phone.php"><p class="p"><i class="fa-solid fa-mobile-screen me-2"></i><span class="mt-2">Phone and Tablets</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
								<a href="computing.php"><p class="p"><i class="fa-solid fa-desktop me-2"></i><span class="mt-2">Computing</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
									<a href="electronics.php"><p class="p"><i class="fa-solid fa-plug-circle-bolt me-2"></i><span class="mt-2">Electronics</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
									<a href="fashion.php"><p class="p"><i class="fa-solid fa-vest-patches me-2"></i><span class="mt-2">Fashion</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-12 cat">
								<a href=""><p class="p"><i class="fa-solid fa-baby me-2"></i><span class="mt-2">Baby Products</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-md-12 cat">
									<a href=""><p class="p"><i class="fa-solid fa-futbol me-2"></i><span class="mt-2">Sporting</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-md-12 cat">
								<a href=""><p class="p"><i class="fa-solid fa-puzzle-piece me-2"></i><span class="mt-2">Gaming</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-12 cat">
									<a href=""><p class="p"><i class="fa-solid fa-gauge-high me-2"></i><span class="mt-2">Auto-mobile</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-12 cat">
								<a href=""><p class="p"><i class="fa-solid fa-angles-right me-2"></i><span class="mt-2">Others</span></p></a></a>
							</div>
						</div>



					</div>

					<!-- first display carousel-->

					<div  class="col-6 col-sm-none col-md-6 content car1" style="border:px solid black;">

					<div id="banner" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ecom9.jpg" class="d-block w-100 img-fluid" alt="photo" id="img" >
     
    </div>
    <div class="carousel-item">
      <img src="images/ecom.jpg" class="d-block w-100" alt="photo" id="img">
    </div>
    <div class="carousel-item">
      <img src="images/ecom2.jpg" class="d-block w-100" alt="photo" id="img">
    </div>
   
     <div class="carousel-item">
      <img src="images/ecom3.jpg" class="d-block w-100" alt="photo" id="img">
    </div>

     <div class="carousel-item">
      <img src="images/ecom4.jpg" class="d-block w-100" alt="photo" id="img">
    </div>

    <div class="carousel-item">
      <img src="images/ecom5.jpg" class="d-block w-100" alt="photo" id="img">
    </div>

    <div class="carousel-item">
      <img src="images/ecom6.jpg" class="d-block w-100" alt="photo" id="img">
    </div>

    <div class="carousel-item">
      <img src="images/ecom7.jpg" class="d-block w-100" alt="photo" id="img">
    </div>
    <div class="carousel-item">
      <img src="images/ecom8.jpg" class="d-block w-100" alt="photo" id="img">
    </div>


  </div>
  
</div>
					</div>










					<div id="car2" class="col-3 content p-2 coll2 carr2" style="border:px solid black;">
						<!-- second display carousel-->
						<div class="row">
							<div class="col dis">
								<div id="banner2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/jiggy.j.jpg" class="d-block w-100 " id=sec alt="photo">
    </div>
   
    <div class="carousel-item">
      <img src="images/jiggy.ll.png" class="d-block w-100" id=sec alt="photo">
    </div>
  </div>

</div>
							</div>
						</div>



						<!-- third display carousel-->


						<div class="row">
							<div class="col dis">
								

																<div id="banner3" class="carousel slide car" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/jiggy.j.jpg" class="d-block w-100 " id=sec alt="photo">
    </div>
   
    <div class="carousel-item">
      <img src="images/jiggy.ll.png" class="d-block w-100" id=sec alt="photo">
    </div>
  </div>


							</div>
						</div>
					</div>

				</div>
				</div>
				</div>
			</div>
		</div>
		

		<!--before listing -->

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					
					

				</div>
			</div>
		</div>





		<!-- First listing -->


		<div class="container  ">
			<div class="row  ">
				<div class="col con"  style="border:px solid black ;">
					<h2 style="text-align:center;color: white;"><i class="fa-solid fa-arrow-up-wide-short"></i> TOP Listing</h2>
				</div>
			</div>




			<div class="row ">

				<!-- option 1-->
				<?php 
					include_once "jiggy/buyer.php";

					//create object 
					$obj = new Buyer();
					//make reference to list product method  

					$products = $obj->listProducts();

					//check if there are products 

					if (count($products)>0) {
						// loop through array using for each 
						foreach ($products as $key => $value) {
							
					
							 $prod_id = $value['PRODUCT_ID'];
							 $prodname =$value['PRODUCT_NAME'];
					?>


				<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list" id="col1">

					
					<div class="row img">
						<div class="col img">
							<img  id="imgsales" src="productphotos/<?php echo $value['PICTURE'] ?>" alt="photo" class="img-fluid p-2 img img-rounded" id="img1">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px"><?php echo $value['PRODUCT_NAME']?></p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b><?php echo number_format($value['PRICE']); ?></p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;"> &#8358 <?php echo number_format($value['OLD_PRICE'],2); ?></p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
		
			<form method="post" action="productinformation.php?ID=<?php echo $value['PRODUCT_ID'] ?>">
					<input type="hidden" name="companyname" value="<?php echo $value['COMPANY_NAME']?>">
				<input type="hidden" name="productid" value="<?php echo $value['PRODUCT_ID']?>">
				<input type="hidden" name="name" value="<?php echo $value['PRODUCT_NAME']?>">
				<input type="hidden" name="price" value="<?php echo $value['PRICE']?>">
				<input type="hidden" name="picture" value="<?php echo $value['PICTURE']?>">
				<input type="hidden" name="description" value="<?php echo $value['DESCRIPTION']?>">
				
				
				<input type="submit" class="btn myowncolor form-control"  style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="btnBuy" value="View" onclick="addCart()">
			<!-- 	<button name="btnadd" type="button" class="btn btn-success" id="addcart" onclick="addCart()">Add To Cart</button> -->
			</form>
								</div>
							</div>


					</div>	
					</div>


				</div>

				

			

			

				<?php

					}
					}

					?>
			</div>
			</div>


			<!-- Gif  -->
			<div class="container-fluid mt-2">
				<div class="row">
					<div class="col">
						<h2 style="color:rgb(228, 87, 46); text-align: center;">TOP STORE | KEYS</h2>
					</div>
				</div>
				<div class="row" >
					<div class="col-6 " style="justify-content: center;display:flex" >
						<video autoplay muted loop style="height:500px ;width: px; ">
							<source src="video/new.mp4" type="">
						</video>
					</div>

						<div class="col-6 " style="justify-content: center;display:flex" >
						<video autoplay muted loop style="height:500px ;width: px; ">
							<source src="video/new.mp4" type="">
						</video>
					</div>

				


					
				</div>
			</div>


			<!-- second listing position  -->


					<div class="container mt-2">


						<div class="row">


							<div class="col">
								<h2 style="color:rgb(228, 87, 46);"><i class="fa-solid fa-tags"></i> Top Selling</h2>
							</div>
						</div>






						<div class="row">

									<?php 
					include_once "jiggy/buyer.php";

					//create object 
					$obj = new Buyer();
					//make reference to list product method  

					$products = $obj->topSelling();

					//check if there are products 

					if (count($products)>0) {
						// loop through array using for each 
						foreach ($products as $key => $value) {
							
					

					?>
											<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img id="imgsales" src="productphotos/<?php echo $value['PICTURE'] ?>" alt="photo" class="img-fluid p-2 img img-rounded">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px"><?php echo $value['PRODUCT_NAME']?></p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b><?php echo number_format($value['PRICE']); ?></p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">&#8358 <?php echo number_format($value['OLD_PRICE'],2); ?></p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
							<form method="post" action="productinformation.php">
					<input type="hidden" name="companyname" value="<?php echo $value['COMPANY_NAME']?>">
				<input type="hidden" name="productid" value="<?php echo $value['PRODUCT_ID']?>">
				<input type="hidden" name="name" value="<?php echo $value['PRODUCT_NAME']?>">
				<input type="hidden" name="price" value="<?php echo $value['PRICE']?>">
				<input type="hidden" name="picture" value="<?php echo $value['PICTURE']?>">
				<input type="hidden" name="description" value="<?php echo $value['DESCRIPTION']?>">
				
				<input type="submit" class="btn myowncolor form-control" style="box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="btnBuy" value="View">
		<!-- 		<button name="btnadd" type="button" class="btn btn-success" id="addcart" onclick="addCart()">Add To Cart</button> -->
			</form>
								
								</div>
							</div>


					</div>	
					</div>

				</div>



				<?php

					}
					}

					?>

						</div>


					</div>

					<div class="container mt-2">
				
						<div class="row ">
					<div class="col" style="text-align:center; background-color:rgb(227, 87, 46);">
						<h2 style="color:white;">ANDROID | IOS</h2>
					</div>
				</div>
				<div class="row" style="background-color:rgb(227, 87, 46); height: 300px;">
					<div class="col-4">
						<img src="images/jumia.png" alt="photo" class="img-fluid ii" style="width: 500px;">
					</div>

						<div class="col-4">
							<img src="images/jumia2.png" alt="photo" class="img-fluid" style="width: 500px;">
					</div>

						<div class="col-4">
							<img src="images/jumia3.png" alt="photo" class="img-fluid" style="width:500px">
					</div>
				</div>


					</div>







				
			
		
		
			


	</body>
	<footer  class=" header-footer-bg mt-2">
		<div class="container-fluid" style="background: #323232 ;">
			<div class="row">
				<div class="col-12 ">
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
				<li>	<a href="comingsoon.php" >	Help Center</a><br>
				<li>	<a href="comingsoon.php">	How to Shop on JiGGY? </a> </li><br>
					<li>	<a href="comingsoon.php">	Delivery and Timelines </a> </li><br>
							<li> <a href="comingsoon.php">	Report a Product </a> </li><br>
								<li>	<a href="comingsoon.php"> Ship to Anywhere in Nigeria </a> </li><br>
								</ul>
					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">

						<li> <a href="comingsoon.php"> About Us </a> </li> <br>
						<li> <a href="comingsoon.php"> Terms and Condition. </a></li><br>
						</ul>

					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">
						<li> <a href="comingsoon.php"> Sell on JiGGY </a> </li><br>
						<li> <a href="comingsoon.php"> Become a Sales Consultant </a> </li><br>
					</ul>

					</div>
					<div style="color:white; text-align: center;">Copyright &copy; JIggy Enterprise</div>
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
      </form>





	<script type="text/javascript" src="jquery.min.js"></script>

	
	<!-- javascript -->
	<script type="text/javascript" language="javascript">
	
		need=0;
		function addCart(){
				if(need = 1){
					document.getElementById('items_in_cart').innerHTML = need;
					document.getElementById('qty').innerHTML = '';
					document.getElementById('modalqty').innerHTML = need;
				}else{
					alert('You haven\'t specified any quantity. Please do so by clicking the + or - buttons respectively. Thank you.')
				}
			}
			function calculate(){
				total = ( <?php echo number_format($value['PRICE']); ?> * need);
				document.getElementById('pricebox').value =  total;
			}
$(document).ready(function(){
	

	
})

	</script>
</html>