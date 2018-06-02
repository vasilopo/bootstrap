<?php


require_once('db_connection/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	
	
	$ProductID = $_POST["productid"];
	
	echo $ProductID;
	

}else {
	echo "ok";
}



$sql = "INSERT INTO Items (ProductID,Counter) VALUES ("."'".$ProductID."'".",0)";

if ($con->query($sql) === TRUE) {
    echo "<script> window.location.replace('management.php') </script>";
} else {
    echo "Error deleting record: " . $con->error;
}

?>