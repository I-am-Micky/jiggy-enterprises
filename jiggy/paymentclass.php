<?php
include_once "constant.php";

//class Definition
class Payment{
	//member variables

	public $amount;
	public $email;
	public $productid;
	public $conn;

	//member function 
	public function  __construct(){
		//activate database conection handler 
		$this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD, DB_DATABASENAME);
		//CHECK IF CONNECTED 
		if ($this->conn->connect_error) {
			die("Failed to connect to database".$this->conn->connect_error);
		}
	}

	//begin insert products in payment table

	public function insertPayment($user,$amount,$productid,$reference){

	$stmt = $this->conn->prepare("INSERT INTO payments(BUYER_ID,PRODUCT_ID,AMOUNT,REFERENCE)VALUES(?,?,?,?)");

	//bind parameter 
	$stmt->bind_param("iids",$user,$amount,$productid,$reference);

	//execute 
	$stmt->execute();

	//check if inserted successfully 

	if ($stmt->affected_rows == 1) {
				return true ;

			}else{
				return false;
			}
		}

		//begin initialize paysatck
			public function initializePaystackTransaction($email,$amount,$ref){

			$url ="https://api.paystack.co/transaction/initialize";
			$callbackurl ="http://localhost/jiggyenterprise/paystack_callback.php";
			$key = "sk_test_97e0b214bf889fc9c2d333418a96438e9fb0bb80";
			$fields = array(
				'email'=>$email,
				'amount'=>$amount * 100,
				'callbackurl'=>$callbackurl,
				'reference'=>$ref


			);

			//convert to a query string 
			$strfields = http_build_query($fields);

			//step1 :open connection /curl session 
			$ch = curl_init();
			//step 2:set curl options 

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);//this is for the post method
				curl_setopt($ch , CURLOPT_POSTFIELDS, $strfields); // data you want to send using post method 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER,array(


				"Authorization:Bearer $key",
				"Cache-Control: no cache"


			));

			//step 3 : execute curl
			$response = curl_exec($ch);
			if (curl_error($ch)) {
				
				die ("Error:".curl_error($ch));
			}
			//step 4 
			curl_close($ch);

			//step 5 :cconvert Json Response to Array

			$result = json_decode($response, true);
			return $result;
}
// end initialize paystack transaction 


//begin verify paystack transaction 
public function verifyPaystackTransaction($ref){
	$url =  "https://api.paystack.co/transaction/verify/$ref";
	$key = "sk_test_97e0b214bf889fc9c2d333418a96438e9fb0bb80";

	//step1 open connection 

	$ch = curl_init();

	//step2 : set curl options 
	curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(

				"Authorization: Bearer $key"


			));

			//step 3 : execute curl 
			$response = curl_exec($ch);

			//check for any error
			if (curl_error($ch)) {

				die("Oops!".curl_error($ch));

			}

			//step 4 : close curl session 
			 curl_close($ch);

			 //step 5 : convert json response to array 
			 $result = json_decode($response);

			 return $result;
}
//end verify paystack transaction 

//begin update 
public function updateDetails($ref, $amount){

	//prepare statement 

	$stmt = $this->conn->prepare("UPDATE payments set PAYMENT_STATUS = ? WHERE REFERENCE = ?");

	//BIND PARAM 
	$paymentstatus = "completed ";

	$stmt->bind_param("ss",$paymentstatus,$ref);

	//execute
	$stmt->execute();

	//check if it works
	if ($stmt->affected_rows ==1) {

		return true;

	}else{
		return false;
	}

}

//end update 

}

?>