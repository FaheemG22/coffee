<!DOCTYPE html>	
<HTML>
<head>
</head>

<body>	

<?php
$password = $_POST['password'];
$email = $_POST['email'];

$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='user_details';

$conn = mysqli_connect($host,$S_user,$S_password,$db);// you can select db separately as you did already
if($conn){

}
else{
echo "db connection error because of".mysqli_connect_error();
}

try{

$sql = "SELECT * FROM user_details 
WHERE UserEmail='$email' 
AND UserPassword = '$password'";
$result = mysqli_query($conn, $sql);
$hash_password = password_hash($password,PASSWORD_DEFAULT); 

if ( (mysqli_num_rows($result) == 1) && (password_verify($password, $hash_password)) )
{

	$sql = "SELECT UserName FROM user_details WHERE UserEmail='$email' AND UserPassword = '$hash_password'";
	$result = mysqli_query($conn, $sql);

	while($row = $result->fetch_assoc()) {
		$verify = password_verify($password, $hash_password); 
		if ($verify) { 
			$_SESSION["name"] = $row["UserName"];
			$_SESSION["status"] = 'loggedin'; 
		} else { 
			echo 'Incorrect Password!'; 
		} 

		}
	$last=$_SERVER['HTTP_REFERER'];
	header("location:$last");
	exit;  

}
else {
echo 'Incorrect Email or password';
}

}
catch(Exception $e) {
echo 'Incorrect Email or password';
}
?>

</body>
</HTML>
