<?php
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$q = $_REQUEST["q"];


// lookup all hints from array if $q is different from ""


$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
    else{echo "db connection error because of".mysqli_connect_error();}

try
{
echo '<div>';
echo'<section class="ftco-section">
<div class="container">
<div class="row">
';

      
    if ($q == "drinks") {   
    echo'
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>';
        
            $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Drink'"; 
            $result = mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()) {
                echo'<div class="pricing-entry d-flex ftco-animate">
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
    }
    
    if ($q == "Main") { 
    echo'
    <div class="col-md-6 mb-5 pb-3">
    <h3 class="mb-5 heading-pricing ftco-animate">Mains</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Main' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            echo'<div class="pricing-entry d-flex ftco-animate">
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
    <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Dessert' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            echo'<div class="pricing-entry d-flex ftco-animate">
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
    <h3 class="mb-5 heading-pricing ftco-animate">Appetisers</h3>';
    
        $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Appetiser' AND Item_Availability = 1"; 
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            echo'<div class="pricing-entry d-flex ftco-animate">
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
            <h3 class="mb-5 heading-pricing ftco-animate">Coffee</h3>';
            
                $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Coffee' AND Item_Availability = 1"; 
                $result = mysqli_query($conn, $sql);
                while($row = $result->fetch_assoc()) {
                    echo'<div class="pricing-entry d-flex ftco-animate">
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
    }
    else {
        echo'brokey';
    }
    }


    catch(Exception $e) {
        echo 'Incorrect Email or password';
}