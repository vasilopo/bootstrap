<?php 

require_once('db_connection/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	$ProductID = $_POST["management_delete"];
	

}else {
	echo "ok";
}


$sql = "DELETE FROM Items WHERE ProductID LIKE "."'".$ProductID."'";

echo $sql;


if ($con->query($sql) === TRUE) {
    header('Location: management.php');
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();

exit;
?>
