<!DOCTYPE html>	
<HTML>

<title>Testing Grounds</title>

<body>
<div>
<?php
  $plaintext_password = "Faheem"; 
  $hash = password_hash($plaintext_password,PASSWORD_DEFAULT); 
  echo "Generated hash: ".$hash . '<br>'; 
  
  $verify = password_verify($plaintext_password, $hash); 
  if ($verify) { 
      echo 'Password Verified!'; 
  } else { 
      echo 'Incorrect Password!'; 
  } 

?>
</div>

</body>
</HTML>
