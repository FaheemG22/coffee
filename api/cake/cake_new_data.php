<?php
session_start();
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);
if($conn){}
if (isset($_GET['Last'])){
  $last = $_GET['Last'];
  $sql = "SELECT * from cake_details WHERE Cake_ID < $last AND Cake_ID ORDER BY Cake_ID DESC LIMIT 3 ";
}
else {$sql = "SELECT * from cake_details WHERE Cake_ID AND Cake_ID ORDER BY Cake_ID DESC LIMIT 3 ";}
  $result = mysqli_query($conn, $sql);
  $array = array();

  while($row = $result->fetch_assoc()) {
    $array[] = array(
    'Cake_ID' => $row['Cake_ID'],
    'User_ID' => $row['User_ID'],
    'Cake_Name' => $row['Cake_Name'],
    'Img_Link' => $row['Img_Link'],
    'Date_Time' => $row['Date_Time']);
  }

  echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>