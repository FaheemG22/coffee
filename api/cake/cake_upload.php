<?php
session_start();
$target_dir = "images/cakerate/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "jfif" && $imageFileType != "webp" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);

    $cake_Name = $_POST['Name'];
    $userID = $_SESSION['SecretI'];
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);
    $newCakeName = str_replace('>',' ',$cake_Name);
    $newCakeName = str_replace('SQL','no',$newCakeName);
    

  if (file_exists($target_dir . $newFileName . '.' . $temp[1])) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    
  }

  elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    $host = 'localhost';
    $S_user = 'root';
    $S_password = '';
    $db ='coffee';
   
    if ($uploadOk == 0 ){
      unlink("test.txt");
    }

    else {
    $newFileName = md5(uniqid(mt_rand(), true));
    $newTargetFile = $target_dir . $newFileName . '.' . $temp[1];
    $img_link = $newFileName . '.' . $temp[1];
    
    if (file_exists($target_file)){
      rename($target_file, $newTargetFile);
      echo "The file ". htmlspecialchars( basename($newTargetFile)). " has been uploaded.<br>";
      
      $tempName = $newFileName . '.' . $temp[1]; 
      
      $sql = "INSERT INTO `cake_details`(`User_ID`, `Cake_Name`, `Img_Link`) 
      VALUES ('$userID','$newCakeName ','$img_link')";
      
      $conn = mysqli_connect($host,$S_user,$S_password,$db);
      $result = mysqli_query($conn,$sql);
      $last = $_SERVER['HTTP_REFERER'];
      header("location:$last");
    }
    }

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>