<?php
// Array with names
session_start();
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
/*
$a = "<br><br>asda";
echo'<style>
.heart {width: 100px;height: 100px;background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;background-position: 0 0;cursor: pointer;transition: background-position 5s steps(28);transition-duration: 0s;}
.heart.is-active {transition-duration: 1s;background-position: -2800px 0;}
</style>';
*/

$sql = "SELECT * FROM `cake_details` ORDER BY `Cake_ID` DESC"; 
$result = mysqli_query($conn, $sql);
$array = array();
while($row = $result->fetch_assoc()) {
  $array[] = array('Cake_ID' => $row['Cake_ID'],'User_ID' => $row['User_ID'],'Cake_Name' => $row['Cake_Name'],'Img_Link' => $row['Img_Link'],'Date_Time' => $row['Date_Time']);
  /*
    echo'<div class="container">
    <div class="modal" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
      <div class="modal-content border rounded-3" style="width:100%;min-width:250px;min-height:500px;">
        <div class="container">
            <div class="heading-section  ">
            
              <div>
              <span class="subheading text-center">'. $row['Cake_Name'] .'</span>
              </div>
              
              <div>
              <span class="subheading text-center" style="font-size:35px;margin-top:20px;">' . $row['Date_Time'].'</span>
              </div>
            </div>
        
            <hr>

            <img src="images/cakerate/'.$row['Img_Link'] . '" class="img-thumbnail rounded mx-auto d-block" style="max-height:1500px;max-width:90%;">
          
            <hr>
            <div class="d-flex justify-content-center" style="margin-top:-40px;">
              <div class="heart"></div>
            </div>

            <div class="d-flex justify-content-center">
              <p class="text-center" style="border: 2px solid white;border-radius: 15px;margin-top:-25px;height:50px;width:150px;font-size:x-large;"> 100 Likes</p>
            </div>

          </div>            
        </div>
      </div>
    </div>
    <br>'
    ;
*/
}
echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>