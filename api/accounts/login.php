<!DOCTYPE html>	
<HTML>
<head>
</head>

<body>	

<?php
session_start();
$password = $_POST['password'];
$email = $_POST['email'];

$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);// you can select db separately as you did already
if($conn){

}
else{
echo "db connection error because of".mysqli_connect_error();
}

try{
	$sql = "SELECT * FROM user_details Where UserEmail= '$email'";
	$result = mysqli_query($conn, $sql);



	while ($row = $result -> fetch_row()) {
		echo'asda';
		$db_password = $row[3];
		$verify = password_verify($password, $db_password); 
		
		if (password_verify($password, $db_password)) 
		{ 
			$_SESSION["SecretI"] = $row[0];
			$_SESSION["SecretN"] = $row[2];
			$_SESSION["SecretE"] = $email;
			$_SESSION['SecretP'] = $password;
			$last=$_SERVER['HTTP_REFERER'];
			header("location:$last");
			exit;  
		}
		else 
		{ 
			echo 'Incorrect Password!'; 
		}
	}
	echo'Account does not exist';
}
catch(Exception $e) {
echo 'Incorrect Email or password';
}
?>

</body>
</HTML>
