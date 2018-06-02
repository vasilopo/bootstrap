<?php
include 'login.php';

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	echo "NO CONNECTION";
}

mysqli_set_charset($conn, "utf8");

$sql = "select onoma_diorganwti from diorganwtis;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
	    $value=$row['onoma_diorganwti'];
	    echo "<li><a href=''>$value<i class='loginButton trash fa fa-trash-o'></i></a></li>";
        //echo "<option value='$value'>$value</option>";

    }
} else {
    echo "0 results";
}


mysqli_close($conn);

?>
