<?php 


require_once('db_connection/db_connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$ProductID = $_POST["reduce_counter"];
	

} else {
	echo "ok";
}



$sql = "SELECT * FROM Items WHERE ProductID LIKE "."'".$ProductID."'";
$result = $con->query($sql);


if($result->num_rows > 0){
	
	while($row = $result->fetch_assoc()){
	
		$counter = $row['Counter'];
		
		$counter -= 1;
		
		$sql_input = "UPDATE Items SET Counter=".$counter." WHERE ProductID LIKE "."'".$ProductID."'";
		
		if ($con->query($sql_input) === TRUE) {
		    echo "<script> window.location.replace('addvalues.php') </script>";
		} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();

exit;

}

}
	
	


?>