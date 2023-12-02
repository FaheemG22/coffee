<?php
// Array with names
session_start();
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}

$json = $_GET['q'];
$sql = "SELECT * FROM `cake_details` ORDER BY `Cake_ID` DESC"; 
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