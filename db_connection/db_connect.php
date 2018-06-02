<?php
$con = mysqli_connect("localhost","root","root","My Cafe");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
$sql = "SELECT * FROM Items";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ProductID: " . $row["ProductID"]. " - Counter: " . $row["Counter"].'<br>';
    }
} else {
    echo "0 results";
}

?>