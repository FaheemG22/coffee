<!DOCTYPE html>	
<HTML>
<?php include "./header.php"?>

<title>Testing Grounds</title>

<body>
<div>
<?php
  $plaintext_password = "Password@123"; 
  $hash = password_hash($plaintext_password,PASSWORD_DEFAULT); 
  echo "Generated hash: ".$hash . '<br>'; 
  
  $plaintext2_password = "Password@123"; 
  $verify = password_verify($plaintext2_password, $hash); 
  if ($verify) { 
      echo 'Password Verified!'; 
  } else { 
      echo 'Incorrect Password!'; 
  } 

?>
</div>

</body>
</HTML>
