

	<!-- AUTHOR:IKWUANUSI MICHEAL- MICKY
	PROJECT:JIGGY ENTERPRISE-->

 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
<link rel="shortcut icon" href="images/jiggyfavicon.png" type="image/x-icon">  
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
    session_start();

  ?>




<!--navigation-->

	<nav class="navbar navbar-expand-md navbar-light myowncolor "  style="border:1px solid black ">
  <div class="container-fluid" >
    
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      	<li class="nav-item">
          <a class="nav-link active mt-2" aria-current="page" href="sellerdashboard.php"><i class="fa-solid fa-arrow-left"></i>Home</a>
        </li>
        <li class="nav-item">
         <img src="images/JIGGY (3).png" alt="logo" style="height: 60px" class="img-fluid">
        </li>


        <li>
        	
        	<a class="nav-link  mt-2" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Hello <?php 
              if(isset($_SESSION['USERNAME'])){
                echo $_SESSION['USERNAME'];
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









			<script type="text/javascript" src="jquery.min.js"></script>

				<script type="text/javascript" language="Javascript">
					
						$(document).ready(function(){



						})


				</script>
<?php 


?>
