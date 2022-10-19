<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnMakePayment'])) {


		// var_dump($_POST);
		
		include_once "jiggy/paymentclass.php";

		//create object of payment class 

		$obj = new Payment();
		$myreference = "jiggy".rand().time();

		//make use if initialize paystack transaction method 

		$output = $obj->initializePaystackTransaction($_POST['email'], $_POST['amount'], $myreference);

		// $output = $obj->initializePaystackTransaction('jiggy@gmail.com',2000,'12345678');

		echo $_POST['email'];
		echo $_POST['amount'];
		echo "$myreference";
		echo "<pre>";
		print_r($output);
		echo "</pre>";


		$redirect_url = $output['data']['authorization_url'];

		if (!empty($redirect_url)) {
			// redirect to paystack payment gateway 

			header("location: $redirect_url");
		}else{
				echo "<pre>";
		print_r($output);
		echo "</pre>";
		}
	}


?>