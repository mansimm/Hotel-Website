
<?php
/*
if (isset($_POST['email'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
}

// Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user 'root' with no password) 
$link = mysqli_connect("localhost", "root", "mansi@1999", "hotel");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	echo "Connected to database ...\n";
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$pin = mysqli_real_escape_string($link, $_REQUEST['pin']);
$birth = mysqli_real_escape_string($link, $_REQUEST['dateofbirth']);

if($name != null){
echo "Welcome $name";
}
 
 
// Attempt insert query execution
$sql = "INSERT INTO mydata2 (name, email, mobile, pin, dateofbirth) VALUES ('$name', '$email', '$mobile', '$pin', '$birth')";
if(mysqli_query($link, $sql)){
    echo "<b>Records inserted successfully.</b>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header("location:index.php");
}
 
// Close connection
mysqli_close($link);*/
if (isset($_POST['email'])) {
	$pass = strip_tags($_POST['pass']);
	$email = strip_tags($_POST['email']);
	$message = strip_tags($_POST['message']);
}
echo "you are Sign up +$email"
?>
<!--
<!DOCTYPE html>
<html>
        
	<head>
		<title>Submit</title>
		<style>
		</style>

	</head>
	<body bgcolor="sky-blue">

		<div class="container">
		  <h2>Thank You !</h2><br>
		  <a href="index.php" >Click here to submit another response </a>
		</div>


	</body>

</html>-->




