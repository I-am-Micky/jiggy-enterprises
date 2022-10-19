<?php 
$password ="ADMIN";

 $pword=password_hash($password, PASSWORD_DEFAULT);
 echo "$pword";

?>