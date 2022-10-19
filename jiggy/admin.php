	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	
<?php 

	include_once("jiggy/constant.php");

	class Admin{

	public $email_address;
		public $password;
		public $username;
		public $company_address;
		public $company_name;
		public $phone_number_one;
		public $phone_number_two;
		public $category_name;


		public $conn; //database connection handler


		//member methods/functions
		public function __construct(){
			//create of mysqli class 

			$this->conn = new mysqli(DB_HOST, DB_USERNAME , DB_PASSWORD, DB_DATABASENAME);


			// if ($this->conn->connect_error) {
			// 	echo "connection failed ". $this->conn->connect_error;
			// }else{
			// 	echo "connecttion successful";
			// }
		}



			//begin get categories 


			function getCategory(){
		// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM categories");

		//execute 
		$stmt->execute();

		//get result 
		$result = $stmt->get_result();



		$records = array();

		if ($result->num_rows > 0){
			//looping through the result set to fetch all records
			while ($row = $result->fetch_assoc()) {

			$records[] = $row;
			}


		}
		return $records;

	}



			//end categories

			//begin get all seller

				function getSeller($sellerid){
		// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM seller WHERE SELLER_ID = ?");

		// bind the parameter
			$stmt->bind_param("i", $sellerid);

		//execute 
		$stmt->execute();

		//get result 
		$result = $stmt->get_result();

		
			return $result->fetch_assoc();

	}

			//end get all seller 


	//START ADD CATEGORY

	public function addCategory($category_name,$picture){

		//prepare statement
		$stmt = $this->conn->prepare("INSERT INTO 
			categories(CATEGORY_NAME,CAT_ID,CATEGORY_IMAGE) VALUES(?,?)");

		//allowed file ectension

		$ext = array('jpg','png','jpeg','gif','jfif');
				//create common object
				$obj = new Common;
				$picture = $obj->uploadAnyFile("productphotos/",1048576,$ext);

				if (array_key_exists('success',$picture)) {
					

				$filename = $picture['success'];

			//bind parameters
		$stmt->bind_param("sis",$category_name,$cat_id,$filename);

		//execute prepared statement

		$stmt->execute();
		//check if record was inserted/ successful

		if ($stmt->error) {
			return "oops something happened!".$stmt->error;
		}else{
			return "input was successfully inserted";
		}
		}else{
					return $picture['error'];
				}


	}


	//END ADD CATEGORY

	#begin delete club record
		public function deleteCat($id){
			//prepare the statement
			$statement = $this->conn->prepare("DELETE FROM categories WHERE CAT_ID=?");

			//bind param
			$statement->bind_param("i",$id);

			//execute

			$statement->execute();

			//check if record was deleted

			if ($statement->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Category was successfully deleted!";
				header("location:admindashboard.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete club record.";
				header("location:admindashboard.php?info=$msg");
				exit;
			}

		}


		#end club record

		#begin delete club record
		public function deleteSeller($id){
			//prepare the statement
			$statement = $this->conn->prepare("DELETE FROM seller WHERE COMPANY_NAME=?");

			//bind param
			$statement->bind_param("s",$id);

			//execute

			$statement->execute();

			//check if record was deleted

			if ($statement->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Seller  was successfully deleted!";
				header("location:admindashboard.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete Seller record.";
				header("location:admindashboard.php?info=$msg");
				exit;
			}

		}


		#end club record


	//insert into seller database

		public function updateSeller($company_name, $company_address, $email_address, $password, $username, $phone_number_one, $phone_number_two,$sellerid){



		// eencrypt password 
		$pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			UPDATE seller SET COMPANY_NAME=?,COMPANY_ADDRESS=?,EMAIL_ADDRESS=?,PASSWORD=?,USERNAME=?,PHONE_NUMBER_ONE=?,PHONE_NUMBER_TWO=? WHERE SELLER_ID=?

			");



		//bind parameters

			$stmt->bind_param("sssssssi",$company_name,$company_address,$email_address,$pword,$username,$phone_number_one,$phone_number_two,$sellerid);



			//execute

			$stmt->execute();

			//check if update was successfully updated
		
			if ($stmt->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Seller  was successfully Updated!";
				header("location:admindashboard.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not Update Seller record.";
				header("location:admindashboard.php?info=$msg");
				exit;
			}
	}

//insert ends here

	//begin get categories 


			function getBrand(){
		// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM brand");

		//execute 
		$stmt->execute();

		//get result 
		$result = $stmt->get_result();



		$records = array();

		if ($result->num_rows > 0){
			//looping through the result set to fetch all records
			while ($row = $result->fetch_assoc()) {

			$records[] = $row;
			}


		}
		return $records;

	}



			//end categories

	//START ADD BRAND

	public function addBrand($brand_name){

		$stmt = $this->conn->prepare("INSERT INTO 
			brand(BRANDNAME,BRAND_ID) VALUES(?,?)");
			//bind parameters
		$stmt->bind_param("si",$brand_name,$brand_id);

		//execute prepared statement

		$stmt->execute();
		//check if record was inserted/ successful

		if ($stmt->error) {
			return "oops something happened!".$stmt->error;
		}else{
			return "input was successfully inserted";
		}


	}


	//END ADD BRAND

	//begin insert product 

	public function insertProducts( $productname,$sellerid, $price, $desc, $brandid, $catid,$picture){



		// // eencrypt password 
		// $pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			INSERT INTO products(PRODUCT_NAME,SELLER_ID,PRICE,DESCRIPTION,BRAND_ID,CAT_ID,PICTURE)VALUES(?,?,?,?,?,?,?)

			");



		

			

		//allowed file ectension

		$ext = array('jpg','png','jpeg','gif','jfif');
				//create common object
				$obj = new Common;
				$picture = $obj->uploadAnyFile("productphotos/",1048576,$ext);

				if (array_key_exists('success',$picture)) {
					

				$filename = $picture['success'];

					// bind parameters
					$stmt->bind_param("siisiis", $productname,$sellerid, $price, $desc, $brandid, $catid,$filename);
					// execute
					$stmt->execute();


					if ($stmt->affected_rows == 1){
						return true;
					}else{
						return $stmt->error;
					}

					
				}else{
					return $picture['error'];
				}

	}

	//BEGIN LISTProduct
	public function sellerLists($sellerid){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM products WHERE SELLER_ID=?");

			// bind the parameter
			$stmt->bind_param("i", $sellerid);

		//EXECUTE 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		//fetch records 
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

	//END LIST Products

	//BEGIN LISTProduct
	public function getProduct($product_id){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM products WHERE PRODUCT_ID=?");

			// bind the parameter
			$stmt->bind_param("i", $product_id);

		//EXECUTE 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		//fetch records 
		// $records = array();
		// if ($result->num_rows > 0){
		// 		while ($row = $result->fetch_assoc()){
		// 			$records[] = $row;
		// 		}
		// 	}
			return $result->fetch_assoc();

	}

	//END LIST Products



		#begin delete product record
		public function deleteProduct($id){
			//prepare the statement
			$stmt = $this->conn->prepare("DELETE FROM products WHERE PRODUCT_ID=?");

			//bind param
			$stmt->bind_param("i",$id);

			//execute

			$stmt->execute();

			//check if record was deleted

			if ($stmt->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Product  was successfully deleted!";
				header("location:sellerdashboard.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete Seller record.";
				header("location:sellerdashboard.php?info=$msg");
				exit;
			}

		}


		#end delete product record


		//begin updateProduct
		public function updateProduct($productname, $price,$oldprice, $description,$productid){


			$stmt =$this->conn->prepare(" UPDATE products SET PRODUCT_NAME=?,PRICE=?,OLD_PRICE=?,DESCRIPTION=? WHERE PRODUCT_ID=?");
			//bind param 
			$stmt->bind_param("siisi",$productname, $price,$oldprice, $description,$productid);

			//execute

			$stmt->execute();
			//check if inserted successfully 
			return $stmt->affected_rows;
		}

			//BEGIN LISTOrders
	public function listOrders(){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM `order`");

		//EXECUTE 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		//fetch records 
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

	//END LIST orders

	//begin get users 
public function getUser($buyerid){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM buyer WHERE BUYER_ID=?");

			// bind the parameter
			$stmt->bind_param("i", $buyerid);

		//EXECUTE 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		
			return $result->fetch_assoc();

	}
	
	//end get users


		//begin get all users 
public function allUser(){
			// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM buyer");

		//execute 
		$stmt->execute();

		//get result 
		$result = $stmt->get_result();



		$records = array();

		if ($result->num_rows > 0){
			//looping through the result set to fetch all records
			while ($row = $result->fetch_assoc()) {

			$records[] = $row;
			}


		}
		return $records;

	}


		
	
	//end get all users

	//begin get all payment 

	public function listPayments(){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM `payments`");

		//EXECUTE 
		$stmt->execute();

		//get result 

		$result = $stmt->get_result();

		//fetch records 
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

	//end get all payment  
	}

  ?> 