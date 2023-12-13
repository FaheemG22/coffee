<?php
function menu_request($inp){
    $conn = mysqli_connect('localhost','root','','Coffee');
    $sql = "SELECT * FROM `menu_details` WHERE Item_Type = '$inp' AND Item_Availability = 1"; 
    $result = mysqli_query($conn, $sql);
    return $result;
}
function menu_output($result){
    while($row = $result->fetch_assoc()) {
        $array[] = array('Item_Name' => $row['Item_Name'],'Item_Type' => $row['Item_Type'],'Item_Cost' => $row['Item_Cost'],'Img_Link' => $row['Img_Link'],);}
        return $array;}

$item_type = ucfirst($_GET["type"]);
$request = menu_request($item_type);
$array  = menu_output($request);
echo json_encode($array, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>