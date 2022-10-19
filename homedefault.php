<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->



<! doctype html>
<html lang="en">



<head>

	<title> Jiggy Enterprise</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="jquery.min.js">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<style type="text/css">
			@media screen and(max-width:480px ){


				#car1{display: none;}
				#carr2{display: none;}
				


			}
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
		}
		.cart{ 
	  	position:fixed;
	  	bottom:500px;
	  	left:5px;
	  	/*color:rgb(228, 87, 46);*/
	   }
	   button{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

	.p:hover{
		background-color:rgb(228, 87, 46) ;
		color:rgb(254, 233, 225);
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
						<div class="col-2">
							<a type="button" class="btn myowncolor form-control button" href="sellersignup.php" style="color:rgb(254, 233, 225);  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" >Sell on Jiggy</a>
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

		<nav class="navbar  navbar-expand-lg   header-footer-bg myowncolor "  style="border:1px solid black ">
  <div class="container" >
  	<a class="navbar-brand" href="home.php"><img src="images/JIGGY (3).png" width='100'></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

   
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px; color: black;"><i class="fa-solid fa-dolly"></i>
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          	<li ><a type="button" class="btn btn-outline-warning form-control" href="login.php" >Sign In</a></li>
          	<li><hr class="dropdown-divider"></li>




            <li><a class="dropdown-item" href="<?php if(isset($_SESSION['BUYER_ID'])){
            	header("location:dashboard.php");
            }?>"><i class="fa-solid fa-dolly"></i> My Account</a></li>


            <li><a class="dropdown-item" href=""><i class="fa-solid fa-list-check"></i> Orders</a></li>



            <li><a class="dropdown-item" href=""><i class="fa-solid fa-heart-circle-plus"></i> Saved Items</a></li>
          
          </ul>
        </li>
        
         <li class="cart"><a class="dropdown-item mt-2 fa-2x" href=""><i class="fa-solid fa-cart-arrow-down"></i><span class="badge bg-danger rounded-pill" id='items_in_cart' style="position: absolute; font-size: 10px"></span></i> </a></li>
        
      </ul>
            <form class="d-flex mt-4">
        <input class="form-control me-2" style="width: 500px;"type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>

      
     
    </div>
  </div>
</nav>
</div>
</div>
</div>
<!-- Menu -->
		
		<div class="container con">
			<div class="row ">
				<div class="col-md-12 ">
					<div class="row " style="justify-content: space-between;">
					<div class="col-lg-3 col-md-3 col-sm-12 coll2 content p-2" style="border:px solid black;">


							<div class="row">
							<div class="col-12 cat">
							<a href=""><p class="p"><i class="fa-solid fa-store me-2"></i><span >Supermarket</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-md-12 cat">
						<a href="">	<p class="p"><i class="fa-solid fa-heart-pulse me-2"></i><span class="mt-2">Health</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col cat">
								<a href=""><p class="p"><i class="fa-solid fa-house me-2"></i><span class="mt-2">Home and Office</span></p></a>
							</div>
						</div>

							<div class="row">
							<div class="col-12 cat">
									<a href=""><p class="p"><i class="fa-solid fa-mobile-screen me-2"></i><span class="mt-2">Phone and Tablets</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
								<a href=""><p class="p"><i class="fa-solid fa-desktop me-2"></i><span class="mt-2">Computing</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
									<a href=""><p class="p"><i class="fa-solid fa-plug-circle-bolt me-2"></i><span class="mt-2">Electronics</span></p></a>
							</div>
						</div>


							<div class="row">
							<div class="col-12 cat">
									<p class="p"><i class="fa-solid fa-vest-patches me-2"></i><span class="mt-2">Fashion</span></p></a>
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

					<div id="car1" class="col-6 col-sm-none col-md-6 content" style="border:1px solid black;">

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










					<div id="car2" class="col-3 content p-2 coll2" style="border:px solid black;">
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
								

																<div id="banner3" class="carousel slide" data-bs-ride="carousel">
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
				<div class="col con"  style="border:1px solid black ;">
					<h2 style="text-align:center;color: white;"><i class="fa-solid fa-arrow-up-wide-short"></i> TOP Listing</h2>
				</div>
			</div>




			<div class="row ">

				<!-- option 1-->


				<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list" id="col1">
					<div class="row img">
						<div class="col img">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img" id="img1">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">&#8358 1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>

				<!-- option 2-->

				<div class="col-lg-2  col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col img">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;"> &#8358 1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>



<!-- option 3-->
<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col img ">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">&#8358 1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">39%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>

				<!-- option 4-->

<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2  list">
					<div class="row img">
						<div class="col img">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px ; text-decoration: line-through;"> &#8358 1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar " role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>


				<!-- option 5-->

<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col img">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar " role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>
				<!-- option 6-->

<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list ">
					<div class="row img">
						<div class="col img">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
									<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>

				

			


			</div>
			</div>





			<!-- second listing position  -->


					<div class="container">


						<div class="row">
							<div class="col">
								<h2 style="color:rgb(228, 87, 46);"><i class="fa-solid fa-tags"></i> Top Selling</h2>
							</div>
						</div>






						<div class="row">
											<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
															<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								
								</div>
							</div>


					</div>	
					</div>

				</div>

				<!-- option 2-->

				<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
																				<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>



<!-- option 3-->
<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
																				<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>

				<!-- option 4-->

<div class="col-lg-2  col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
																				<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>


				<!-- option 5-->

<div class="col-lg-2  col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speaker.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
																				<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>
				<!-- option 6-->

<div class="col-lg-2 col-xl-2 col-xxl-2 col-md-4 col-sm-6 coll2 list">
					<div class="row img">
						<div class="col">
							<img src="images/speakers2.jfif" alt="photo" class="img-fluid p-2 img">
						</div>
					</div>


					<div class="row name">
						<div class="col name">
							<div class="row rows">
								<div class="col rows">
									<p style="font-size:10px">THUNDER-ROCK Line Array Speakers best Quality </p>
								</div>
							</div>

							
								<div class="row pri">
									<div class="col pri">
										<p ><b>&#8358</b>1500</p>
									</div>
								</div>
								
								<div class="row tri">
									<div class="col tri">
										<p style="font-size:9px; text-decoration: line-through;">$1200</p>
									</div>
								</div>
							
							<div class="row o">
								<div class="col">
																				<p class="mb-0">In Stock</p>
									<div class="progress">
  <div class="progress-bar bar"  role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>
								</div>
							</div>


					</div>	
					</div>

				</div>



						</div>


					</div>

					<!-- top categories section -->
			<!-- 		<div class="container">

						<div class="row">
							<div class="col">
								<h2 style="color:rgb(228, 87, 46);"> Top Categories| Mobile Accessories</h2>
							</div>
						</div>



						<div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col">
										
									</div>
								</div>

								<div class="row">
									<div class="col">
										

									</div>
								</div>

							</div>





							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>


							<div class="col-2">
								
							</div>



						</div>

						<div class="row">
							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							<div class="col-2">
								
							</div>

							
							<div class="col-2">
								
							</div>
						</div>

 -->
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
				<li>	<a href="" >	Help Center</a><br>
				<li>	<a href="">	How to Shop on JiGGY? </a> </li><br>
					<li>	<a href="">	Delivery and Timelines </a> </li><br>
							<li> <a href="">	Report a Product </a> </li><br>
								<li>	<a href=""> Ship to Anywhere in Nigeria </a> </li><br>
								</ul>
					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">

						<li> <a href=""> About Us </a> </li> <br>
						<li> <a href=""> Terms and Condition. </a></li><br>
						</ul>

					</div>
					<div class="col-4" >
						
						<ul style="list-style-type: none;">
						<li> <a href=""> Sell on JiGGY </a> </li><br>
						<li> <a href=""> Become a Sales Consultant </a> </li><br>
					</ul>

					</div>
					<div style="color:white; text-align: center;">Copyright &copy;</div>
				</div>
			</div>
		</div>



	
	</footer>
	<script type="text/javascript" src="jquery.min.js"></script>

	
	<!-- javascript -->
	<script type="text/javascript" language="Javascript">
	


	</script>
</html>