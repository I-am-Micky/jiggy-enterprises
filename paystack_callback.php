<?php 
 var_dump($_REQUEST);

 if (isset($_REQUEST['reference'])) {
 	include_once "jiggy/paymentclass.php";
 	//create obj of class payment 
 	$obj = new Payment();

 	//make use of the verify paystack transaction 

 	$output = $obj->verifyPaystackTransaction($_REQUEST['reference']);

 	echo "<pre>";
 	print_r($output->data->status);
 	echo "</pre>";


 	if (isset($output->data->status) && $output->data->status == 'success') {
 		// update transaction with your reference number'


 		$update_status = $obj->updateDetails($output->data->reference,$output->data->amount);
 		$ref = $_REQUEST['reference'];

 		if ($update_status === true) {
 			//redirect to success page 
 			$ref = $_REQUEST['reference'];
 			header("location: paystack_success.php?ref=$ref");
 			exit;
 		}else{
 			//redirect to failed page 
 			header("location:paystack_failed.php?ref=$ref");
 			exit;
 		}
 	}else{
 		echo "Oops ! Could not verify transaction.";
 	}
 }

?>