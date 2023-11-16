<!--
?php
/*
$target_dir = "uploads/";
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

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
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

    $U_N = $_POST['Name'];
    $U_T = $_POST['Type'];
    $U_P = $_POST['Price'];

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    $host = 'localhost';
    $S_user = 'root';
    $S_password = '';
    $db ='user_details';

    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    

    #$sql = "INSERT INTO menu_details (Item_Name, Item_Type, Item_Cost, Item_Availability, Img_Link) 
    #VALUES ('$U_N','$U_T','$U_P','1','')";
    #$conn = mysqli_connect($host,$S_user,$S_password,$db);
    #$result = mysqli_query($conn,$sql);

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
*/
-->

<?php
  $U_N = $_POST['Name'] ;

  if(isset ($_FILES["fileToUpload"])){

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $temp = explode(".", $_FILES["fileToUpload"]["name"]);

    $newFileName = str_replace(' ','_',$U_N);
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
      rename($target_file, $target_dir . $newFileName . '.' . $temp[1]);
      echo $newFileName;
      
      echo $U_N . '.' . $temp[1] . ' Successfully uploaded';
    }else {
    echo'File Upload failed it already exists';
  }
}
?>