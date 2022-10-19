<link rel="shortcut icon" href="images/jiggyfavicon.png" type="image/x-icon"> 
<style type="text/css">
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
<?php 
 // include_once("sellerdashboardheader.php");

//     //start session
 session_start();


?>

<?php 

// include_once "sellerdashboardheader.php";


if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['btnaddproduct'])) {
	 // validate
        if(empty($_POST['name'])){
          $errors['name'] = "Name cannot be empty!";
        }

        if(empty($_POST['price'])){
          $errors['price'] = "Price cannot be empty!";
        }

        if(empty($_POST['category'])){
          $errors['category'] = "Please Select Category!";
        }

        if(empty($_POST['brand'])){
          $errors['brand'] = "Please Select Brand!";
        }
        if(empty($_POST['description'])){
          $errors['description'] = "Description cannot be empty!";
        }
        // if(empty($_POST['myfile'])){
        //   $errors['myfile'] = "please select product picture!";
        // }

        //sanitize input 

        //check if empty
	if(empty($errors)){
		
	

	//sanitize input
  
	include_once "jiggy/common.php";
	$cmobj = new Common;


        $productname =  $cmobj->sanitizeInputs($_POST['name']);
        $price =  $cmobj->sanitizeInputs($_POST['price']);
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        
      
        $picture = $_POST['myfile'];
              
             
       

        //insert record 

        include_once "jiggy/admin.php";

        $obj = new Admin();
        //reference insertproduct 

        $output = $obj->insertProducts($productname,$_SESSION['SELLER_ID'], $price, $description, $brand, $category,$picture);

        // check if it's successful
      if ($output == true) {
          $msg = "Product was successfully added";
          // redirect to productsclubs
          header("Location: sellerdashboard.php?m=$msg");

        }else{
          $errors[] = "Oops! Could not add Product. ".$output;
       }
 }
}

?>	



	<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php 
              if(isset($_SESSION['USERNAME'])){
                echo $_SESSION['USERNAME'];
              }
             ?> Dashboard</title>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">




		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style type="text/css">
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
		color: rgb(228,87,46);
}

		
</style>
<body>
	<?php  
    //start session
   // session_start();

  ?>




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
        	
        	<a style="color: rgb(254, 233, 225);" class="nav-link  mt-2" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php 
              if(isset($_SESSION['COMPANY_NAME'])){
                echo $_SESSION['COMPANY_NAME'];
              }
             ?>
            </a>
        </li>

         <li class="nav-item mt-2">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>


      </ul>
          
     
    </div>
  </div>
</nav>



<main style="heght:500px">
	<div class="container mt-2">
		<div class="row " style="justify-content:space-around;" >
			<div class="col-3" style="border:px solid gray; background-color: #FFFFFF;heght:500px" >

				<input type="hidden" name="sellerid" value="<?php echo $_SESSION['SELLER_ID']?>">

				<div class="row mt-2">
					<div class="col">
						<a href="sellerdashboard.php"><p class=" mt-2"> <i class="fa-brands fa-android fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>My Jiggy Account</p></a>
					</div>
				</div>


				<div class="row mt-2">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-list-check fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>View Sales</p></a>
					</div>
				</div>


								<div class="row mt-2">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-inbox fa-1x me-2 mt-2" style="color:rgb(227, 87, 46)"></i>View Inbox</p></a>
					</div>
				</div>


								<div class="row">
					<div class="col">
						<a href=""><p class=" mt-2"><i class="fa-solid fa-chalkboard-user me-2 mt-2 fa-1x" style="color:rgb(227, 87, 46)"></i>Reviews</p></a>
					</div>
				</div>

				<div class="row mt-2">
					<div class="col">
						<button class="btn btn-danger   mt-2" type="button" name="btnadd" id="addproduct" style=" box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">Add Product </button>
					</div>

					

				</div>

				<div class="row mt-2">
					<div class="col">
						<p class="btn btn-warning  mt-2" type="button" name="btnadd" id="viewproduct" style=" box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">View Listing </p>
					</div>
				</div>


					




					
				<div class="row mt-2">
					<div class="col">
					<a href="">	<p class=" mt-2">Profile</p></a>
					</div>
				</div>


						<div class="row mt-2">
					<div class="col">
						<a href=""><p class=" mt-2">Change Password</p></a>
					</div>
				</div>

					

			</div>




			<!-- dashboard aspect -->

			<div class="col-9 " style="border:px solid gray;heght: 500px;" id="con" >
							<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-dismissible alert-success mt-3">
        
          <?php echo $_REQUEST['m'];?>

          	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>
				<div class="row">
					<div class="col-12" style="border:2px solid gray; background-color: #FFFFFF;">
						<h2 >Account Overview</h2>


						
					</div>
				</div>

				<!-- Transaction Box -->

				<div class="row mt-1" style="border:px solid gray; height: 200px;">
					<div class="col-6" style="border:2px solid gray;">
						<div class="row">
							<div class="col" style="border:2px solid gray; background-color: #FFFFFF;">
								<small>JIGGY CREDIT <i class="fa-solid fa-arrow-right-to-bracket" style="color:rgb(227, 87, 46)"></i></small>

							</div>
							<div class="row"  >
								<div class="col"  >
									<p id="amountcre" style="font-size:30px;" class="mt-2"><i class="fa-solid fa-naira-sign"></i> 0.00</p>
								</div>
							</div>
						</div>
					</div>



					<div class="col-6" style="border:2px solid gray;">
						<div class="row">
							<div class="col" style="border:2px solid gray; background-color: #FFFFFF;">
								<small>JIGGY DEBIT <i class="fa-solid fa-arrow-right-from-bracket" style="color:rgb(227, 87, 46)"></i></small>

							</div>
							<div class="row">
								<div class="col">
									<p id="amountdeb" style="font-size:30px;" class="mt-2"><i class="fa-solid fa-naira-sign"></i> 0.00</p>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Details Box -->

				<div class="row mt-3" style="justify-content:space-around;height: 200px;">
					<div class="col-6" style="border:2px solid gray; ">
						<div class="row" style="height:40px">
							<div class="col-10" style="border:2px solid gray; background-color: #FFFFFF;">
								<small class="mt-2">ACCOUNT DETAILS</small>
							</div>
							<div class="col-2 " style="border:2px solid gray; justify-content: flex-start; background-color: #FFFFFF;">
								<a href="editseller.php?SELLER_ID=<?php echo $_SESSION['SELLER_ID']?>" ><i class="fa-solid fa-pencil mx-auto mt-2" style="color:rgb(227, 87, 46)"></i></a>
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



					<div class="col-6" style="border:2px solid gray; ">
						<div class="row" style="height:30px">
							<div class="col" style="border:2px solid gray; background-color: #FFFFFF;">
								<small>ADDRESS BOOK</small>
							</div>
						</div>
						<div class="row">
							<div  class="col">
								<p id="shipping"><b>YOUR COMPANY ADDRESS IS:</b></p>
								<p id="address">
									<?php 

									if (isset($_SESSION['COMPANY_ADDRESS'])) {
										echo $_SESSION['COMPANY_ADDRESS'];
									}

									?>
								</p>

							</div>
						</div>

					</div>
				</div>

		
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col" id="">
					
				</div>
			</div>
		</div>
		</main>


	</body>
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
	

	<!-- javascript place -->


						<script type="text/javascript" src="jquery.min.js"></script>

				<script type="text/javascript" language="Javascript">
					
						$(document).ready(function(){

							$("#addproduct").click(function(){

				$.ajax({
					url:"addproducts.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
	

			})

							//sellers list products 
								$("#viewproduct").click(function(){

				$.ajax({
					url:"sellerlist.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
	

			})
								//edit button
											$("#editprod").click(function(){

				$.ajax({
					url:"editproduct.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
	

			})
	

						})


				</script>

	
</html>
	







