<?php
// Array with names
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
$a = "<br><br>asda";


// get the q parameter from URL


// lookup all hints from array if $q is different from ""

    echo'<section class="ftco-section">
  <div class="container">
    <div class="row" >
    ';
  //style="z-index:1000000;"
    echo'
    <div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ">Drinks</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Drink' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
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
        echo'</div>';

    echo'
    <div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ">Mains</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Main' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
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
        echo'</div>';

    echo'
    <div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ">Desserts</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Dessert' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
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
        echo'</div>';

    echo'
    <div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ">Appetisers</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Appetiser' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
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
        echo'</div>';

            echo'
            <div class="col-md-6 mb-5 pb-3">
            <h3 class="mb-5 heading-pricing ">Coffee</h3>';
            
                $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Coffee' AND Item_Availability = 1"; 
                $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()) {
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
                echo'</div>';
    echo'</section>';



// Output "no suggestion" if no hint was found or output correct values

?>