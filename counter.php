<?php 


require_once('db_connection/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if isset($_POST['add_counter']){
		
		echo "add";
	}
	
	if isset($_POST['reduce_counter']){
		
		echo "reduce";
	}
	
	

}else {
	echo "ok";
}


?>