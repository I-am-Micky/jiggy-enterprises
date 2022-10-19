	
	<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-dismissible alert-success mt-3">

          <?php echo $_REQUEST['m'];?>
            	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>

        <?php if (isset($_REQUEST['e'])){?>


       
          <?php echo $_REQUEST['e'];?>
           <div class="alert alert-dismissible alert-danger mt-3">
        	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        </div>

        <?php

        }?>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
include_once ("jiggy/admin.php");






	// reference get categories method 

if (isset($_POST['btnaddcat'])){
	$obj = new Admin();

	$category_name = $_POST['category'];
	$picture = $_POST['catimage'];

	$output = $obj->getCategory();
	$output = $obj->getSeller();
	$output = $obj->addCategory($category_name,$picture);
	
	  // check if insert categoory is successful
      if ($output == true) {
          $msg = "Category was successfully added";
          // redirect to listcategoriies
          header("Location: admindashboard.php?m=$msg");
          exit();

        }else{
          $err = "Oops! Could not add Category. ";
            header("Location: admindashboard.php?e=$err");
            exit();
       }

	
}

if (isset($_POST['btnaddbrand'])) {
	// code...

		$obj = new Admin();
		$brand_name = $_POST['brand'];
		$brand = $obj->addBrand($brand_name);


       //check if insert brand is successful 
       if ($brand == true) {
       	$msg = "Brand was successfully added";
       	//redirect to landing page 
       	header("location:admindashboard.php?m=$msg");
       	exit();
       }else{
       	$err = "Could not Add Brand";
       	header("location:admindashboard.php?e=$err");
       	exit();
       } 
	
}
?>


<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN</title>


   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<style type="text/css">
	#head{background-color:rgb(254,233,225)}

	.myowncolor {
			background-color:rgb(228,87,46);
			
			}
			body{
			background-color: #F5F5F5;
		}
</style>
<body>
	<!-- header -->
	

		<!-- navigation -->
	<nav class="navbar navbar-expand-md navbar-light myowncolor "  style="border:1px solid black ">
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

      </ul>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      	<p class="mt-2">
      		Admin Dashboard
      	</p>
      </div>
          
     
    </div>
  </div>
</nav>

<form method="post" action="">

<div class="container mt-3" >
	<div class="row">
		<div class="col" >
			



		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<div class="row">
				<div class="col-6">
					<button type="button" class="btn btn-warning form-control" name="button" id="button1">Category</button>
				</div>

				<div class="col-6">
					<button type="button" class="btn btn-danger form-control" name="button" id="editcat">Add</button>
				</div>
				
			</div>

			<div class="row">
				<div class="col-6">
					<button type="button" class="btn btn-outline-warning form-control mt-2" name="button" id="brand">Brand</button>
				</div>

				<div class="col-6">
					<button type="button" class="btn btn-outline-danger form-control mt-2" name="button" id="addbrand">Add</button>
				</div>
				
			</div>
				
			

			
				<div class="row">
				<div class="col">
					<button type="button" class="btn btn-info form-control mt-2" name="button" id="button2">All Sellers</button>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<button type="button" class="btn btn-success form-control mt-2" name="button" id="btnproduct">All Products</button>
				</div>


				
				
			
			</div>


			<div class="row">
				<div class="col">
					
					<button type="button" class="btn btn-outline-success form-control mt-2" name="button" id="porders">All Orders </button>

				</div>
			</div>

		</div>

		<div class="col-6" style="border:px solid grey" id="">

				<div class="row">
					<div class="col" style="border:px solid grey; " >
						<button type="button" class="btn btn-success form-control " name="button" id="allusers">All Users</button>
		
					</div>
				</div>
				
				<div class="row">
					<div class="col">
					<button type="button" class="btn btn-warning form-control mt-2" name="button" id="payments">Payments</button>
				</div>
				</div>

		</div>
	</div>
</div>
<div class="container mt-2">
	<div class="row">
		<div class="col" id="con">
			
		</div>
	</div>
</div>



</div>
</form>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" language="Javascript">
		$(document).ready(function(){
			$("#button1").click(function(){

				$.ajax({
					url:"showcategories.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
		

			

				

			})

			//all seller

			$("#button2").click(function(){

				$.ajax({
					url:"showseller.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},
				})
			})
			//add categories
			$("#editcat").click(function(){

				$.ajax({
					url:"addcategories.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})
			//show all brand
			$("#brand").click(function(){

				$.ajax({
					url:"showbrand.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})

			})

			//add brand
			$("#addbrand").click(function(){

				$.ajax({
					url:"addbrand.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})


			$("#btnproduct").click(function(){

				$.ajax({
					url:"showproducts.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})

			$("#porders").click(function(){

				$.ajax({
					url:"showorders.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})

				$("#allusers").click(function(){

				$.ajax({
					url:"showuser.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})


					$("#payments").click(function(){

				$.ajax({
					url:"showpayments.php",
					type:"POST",
					success:function(data){
					$('#con').html(data);
				},


				})
			})

		});







	</script>
