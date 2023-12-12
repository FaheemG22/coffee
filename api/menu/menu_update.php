<?php
 echo'<section class="ftco-section">
  <div class="container">
    <div class="row">';
    $item_types = ['Drink','Main','Dessert','Appetiser','Coffee'];
    foreach ($item_types as $item_type) {
        $request=menu_request($item_type);
        menu_output($request,$item_type);
    }
    echo'</section>';
function menu_request($inp){
    $conn = mysqli_connect('localhost','root','','Coffee');
    if($conn){
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = '$inp' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        return $result;}
}
function menu_output($inp, $name){
    echo '<div class="col-md-6 mb-5 pb-3 heading-section">
    <h3 class="subheading" style="margin-bottom:50px;">'. $name .'s</h3>';
    while($row = $inp->fetch_assoc()) {
        echo'<div class="pricing-entry d-flex ">
                <div class="img" style="background-image: url(images/menu/'. $row['Img_Link'] .');"></div>
                <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                    <h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
                    <span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
                </div>
                </div>
                </div>';                
    }
    echo'</div>';}
?>