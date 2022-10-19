<?php
	
	//import contstant file 
	include_once("constant.php");

	//class Buyer definition 

	class Buyer{

		//member properties  
		public $first_name;
		public $last_name;
		public $email_address;
		public $password;
		public $username;
		public $company_address;
		public $company_name;
		public $phone_number_one;
		public $phone_number_two;
		public $cat_name;
		
		
		public $phone_number;

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

	


	//insert buyer begins here 
	public function buyer($first_name, $last_name, $email_address, $password, $username, $phone_number){



		// eencrypt password 
		$pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			INSERT INTO buyer(EMAIL_ADDRESS,PASSWORD,PHONE_NUMBER,USERNAME,FIRSTNAME,LASTNAME)VALUES(?,?,?,?,?,?)

			");



		//bind parameters

			$stmt->bind_param("ssssss",$email_address,$pword,$phone_number,$username,$first_name,$last_name);



		//execute prepared statement
		$stmt->execute();
		//check if inserted successful

		if($stmt->error){
			return "<div class='alert alert-danger'>oops something happenned! Please Fill all neccessary fields</div>".$stmt->error;
		}else{
			return "<div class='alert alert-success'>Registration was successful</div>";
		} 
	}

//insert ends here

	//insert into seller database

		public function seller($company_name, $company_address, $email_address, $password, $username, $phone_number_one, $phone_number_two){



		// eencrypt password 
		$pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			INSERT INTO seller(EMAIL_ADDRESS,PASSWORD,COMPANY_NAME,PHONE_NUMBER_ONE,PHONE_NUMBER_TWO,COMPANY_ADDRESS,USERNAME)VALUES(?,?,?,?,?,?,?)

			");



		//bind parameters

			$stmt->bind_param("sssiiss",$email_address,$pword,$company_name,$phone_number_one,$phone_number_two,$company_address,$username);



		//execute prepared statement
		$stmt->execute();
		//check if inserted successful

		if($stmt->error){
			return "<div class='alert alert-danger'>oops something happenned! Please Fill all neccessary fields</div>".$stmt->error;
		}else{
			return "<div class='alert alert-success'>Registration was successful</div>";
		} 
	}

//insert ends here

	//login begins here

	public function login($email_address, $password){
		//prepare statement
		$stmt = $this->conn->prepare("SELECT * FROM buyer WHERE EMAIL_ADDRESS = ?");
		//bind the parameter
		$stmt->bind_param("s", $email_address);
		//execute
		$stmt->execute();

		//get result
		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();


			//check if password match 
			if (password_verify($password, $row['PASSWORD'])) {
				
				//create session variables 
				session_start();
				$_SESSION['BUYER_ID'] = $row['BUYER_ID'];
				$_SESSION['FNAME'] = $row['FIRSTNAME'];
				$_SESSION['LNAME'] = $row['LASTNAME'];
				$_SESSION['USERNAME'] = $row['USERNAME'];
				$_SESSION['ADDRESS'] = $row['ADDRESS'];
			$_SESSION['mylogger'] = 'JIGGY';
				$_SESSION['EMAIL_ADDRESS'] =  $row['EMAIL_ADDRESS'];
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

		
	}		

	//login ends here



	//admin begin login


	public function adminLogin($email_address, $password){
		//prepare statement
		$stmt = $this->conn->prepare("SELECT * FROM admin WHERE email = ?");
		//bind the parameter
		$stmt->bind_param("s", $email_address);
		//execute
		$stmt->execute();

		//get result
		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();


			//check if password match 
			if (password_verify($password, $row['password'])) {
				
				//create session variables 
				session_start();
				$_SESSION['admin_id'] = $row['admin_id'];
				
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

		
	}	

	//admin end login

	//begin logout

			function logout(){
				session_start();
				session_destroy();

				//redirect to login
				header("location:login.php");
			}


			//end logout


			//begin seller login

				//login begins here

	public function sellerLogin($email_address, $password){
		//prepare statement
		$stmt = $this->conn->prepare("SELECT * FROM seller WHERE EMAIL_ADDRESS = ?");
		//bind the parameter
		$stmt->bind_param("s", $email_address);
		//execute
		$stmt->execute();

		//get result
		$result = $stmt->get_result();

		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();


			//check if password match 
			if (password_verify($password, $row['PASSWORD'])) {
				
				//create session variables 
				session_start();
				
				$_SESSION['COMPANY_NAME'] = $row['COMPANY_NAME'];
				$_SESSION['COMPANY_ADDRESS'] = $row['COMPANY_ADDRESS'];
				
				$_SESSION['USERNAME'] = $row['USERNAME'];
				$_SESSION['SELLER_ID'] = $row['SELLER_ID'];
				$_SESSION['EMAIL_ADDRESS'] =  $row['EMAIL_ADDRESS'];
				
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}

		
	}	

			//end seller login 

	//insert into seller database

		public function products($product_id, $productname, $sellerid, $price, $desc, $brandid, $catid){



		// eencrypt password 
		$pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			INSERT INTO product(PRODUCT_ID,PRODUCT_NAME,SELLER_ID,PRICE,DESCRIPTION,BRAND_ID,CAT_ID)VALUES(?,?,?,?,?,?,?)

			");



		//bind parameters

			$stmt->bind_param("isidsii",$product_id, $productname, $sellerid, $price, $desc, $brandid, $catid);



		//execute prepared statement
		$stmt->execute();
		//check if inserted successful

		if($stmt->error){
			return "<div class='alert alert-danger'>oops something happenned! Please Fill all neccessary fields</div>".$stmt->error;
		}else{
			return "<div class='alert alert-success'>Listing  was successful</div>";
		} 
	}

//insert ends here

		//BEGIN LISTProduct
	public function listProducts(){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM `products` join seller on products.SELLER_ID = seller.SELLER_ID ORDER BY PRODUCT_ID DESC LIMIT 12 ");

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

		//BEGIN LISTTopSelling
	public function topSelling(){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=6  LIMIT 6; ");

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

	//END LIST Topselling


		//BEGIN LISTProduct
	public function adminlistProducts(){
		///preparre statement

		$stmt = $this->conn->prepare("SELECT * FROM products");

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




	//begin get states method


	public function getStates(){


		//prepare statement

		$stmt = $this->conn->prepare("SELECT * FROM state ");

		//execute

		$stmt->execute();

		//get result
		$result = $stmt->get_result();

		//fetch result 
		$data = array();

		if ($result->num_rows>0) {
		while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}	
		}

		return $data;
	}

	//end get states method

	//begin get LGA

	public function getLga($stateid){
		// prepare statement

		$stmt = $this->conn->prepare("SELECT * FROM lga WHERE STATE_ID = ?");

		//bind parameeter 

		$stmt->bind_param("i",$stateid);

		//execute
		$stmt->execute();

		//get result 
		$result = $stmt->get_result();

		$record  = array();
		if ($result->num_rows >0) {
			while ($row = $result->fetch_assoc()) {
				$record[] = $row;
			}
		}

		return $record;
	}


	//End get LGA


//begin insert into cart 

			public function addCart($buyer_id, $product_id, $qty){



		


		//prepare statement 


		$stmt = $this->conn->prepare("
			INSERT INTO cart(BUYER_ID,PRODUCT_ID,QTY_ID)VALUES(?,?,?)

			");



		//bind parameters

			$stmt->bind_param("iii",$buyer_id, $product_id, $qty);



		//execute prepared statement
		$stmt->execute();
		//check if inserted successful

		if($stmt->error){
			return $stmt->error;
		} 
	}


	//end insert into cart 

	//begin get QTY 


			function getQty(){
		// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM quantity");

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

	//end get QTY

	//begin view cart 

			function viewCart($buyerid){
		// prepare the statement
		$stmt = $this->conn->prepare("SELECT * FROM cart join products ON cart.PRODUCT_ID = products.PRODUCT_ID where BUYER_ID=?");


			// bind the parameter
			$stmt->bind_param("i", $buyerid);
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

	//end view cart

		#begin delete cart product record
		public function deleteCart($id){
			//prepare the statement
			$stmt = $this->conn->prepare("DELETE FROM cart WHERE PRODUCT_ID=? LIMIT 1");

			//bind param
			$stmt->bind_param("i",$id);

			//execute

			$stmt->execute();

			//check if record was deleted

			if ($stmt->affected_rows ==1) {
				//redirect to list clubs
				$msg = "Product  was successfully deleted!";
				header("location:home.php?m=$msg");
				exit;
			}else{
				$msg = "Oops! could not delete Seller record.";
				header("location:home.php?info=$msg");
				exit;
			}

		}


		#end delete cart record

		//begin insert order 

			public function insertOrder($shipaddress,$buyerid,$city,$stateid,$zipcode){

	$stmt = $this->conn->prepare("INSERT INTO order(SHIPPING_ADDRRESS,BUYER_ID,CITY,STATE_ID,ZIPCODE)VALUES(?,?,?,?,?)");

	//bind parameter 
	$stmt->bind_param("sisii",$shipaddress,$buyerid,$city,$stateid,$zipcode);

	//execute 
	$stmt->execute();

	//check if inserted successfully 

	if ($stmt->affected_rows == 1) {
				return true ;

			}else{
				return false;
			}
		}
		//end insert order



//Begin get category section

		//computing 
		public function computing(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=32 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		//automobile

		public function automobile(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=28 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		//gaming 
		public function gaming(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=10 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		// this is for sporting
		public function sporting(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=9 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

	//this is for Baby Products

	public function babyProduct(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=8 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	} 

		//this is for fashion 

		public function fashion(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=7 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		//this is for home and office 
		public function home(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=3 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		// this is for supermarket
		public function supermarket(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=1 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

		//this is for health 
		public function health(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=2 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}
		// this is for phone and tablet 
		public function phone(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=4 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

//this is  for electronics 
public function electronics(){
		
		$stmt = $this->conn->prepare("SELECT * FROM `products`  join seller on products.SELLER_ID = seller.SELLER_ID where CAT_ID=6 ");

		$stmt->execute();

		$result = $stmt->get_result();
		$records = array();
		if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					$records[] = $row;
				}
			}
			return $records;

	}

	//End Category section 



// begin edit user


	public function editBuyer($first_name, $last_name, $email_address, $username, $phone_number,$address,$buyerid){



		// // eencrypt password 
		// $pword = password_hash($password, PASSWORD_DEFAULT);


		//prepare statement 


		$stmt = $this->conn->prepare("
			UPDATE buyer SET EMAIL_ADDRESS=?,PHONE_NUMBER=?,USERNAME=?,FIRSTNAME=?,LASTNAME=? , ADDRESS=? WHERE BUYER_ID=?

			");



		//bind parameters

			$stmt->bind_param("sssssss",$email_address,$phone_number,$username,$first_name,$last_name,$address,$buyerid);



		//execute prepared statement
		$stmt->execute();
		//check if inserted successful

		if($stmt->error){
			return "<div class='alert alert-danger'>oops something happenned! Please Fill all neccessary fields</div>".$stmt->error;
		}else{
			return "<div class='alert alert-success'>Registration was successful</div>";
		} 
	}


	//end edit user
}

?>
