<?php
include 'connect.php';

//from user
$username = (isset($_POST['username']) ? $_POST['username'] : null);
$password = (isset($_POST['password']) ? $_POST['password'] : null);
//against sql injection
$username = stripslashes($username);
$password = stripslashes($password);

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['bt1']))
{

	$sql = "SELECT * FROM diaxeiristis WHERE pwusername='$username' and pwpassword='$password'";
	$result = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($result) > 0) {
		// output data of each row

			$row = mysqli_fetch_assoc($result);
			$name = $row["pwusername"];
			$pass = $row["pwpassword"];

			
		 $_SESSION['admin']=$name;
		 if($password == $pass && $username==$name){
			$seconds = 3600 + time();
			setcookie(loggedin, date("F jS - g:i a"), $seconds);
			header("location:adminpage.php"); //edw ginetai redirection gia tin selida tou admin
		//	echo "<script> window.location.assign('admin/index.php')</script>";
		 }
		 else{
			echo "wrong username or password";
			session_destroy();
		 }
		 
	 } else {
		  echo "Something went wrong, please try again<br><br>";
		  echo "<html><button onclick=window.location.assign('index.html#DisplayLogin')><-- try again</button>";
		  echo "</html>";
		  
		  
	   //	 echo "<script> window.location.assign('index.html')</script>";
	 }


}
mysqli_close($conn);
?>