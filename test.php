<!DOCTYPE html>	
<HTML>

<title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<body>
<?php
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
    else{echo "db connection error because of".mysqli_connect_error();}

    try{
        /*
        echo'<section class="ftco-section">
    	    <div class="container">
            <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        	<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>';
        */

        echo'<section class="ftco-section">
    	<div class="container">
        <div class="row">

        ';

        echo'
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>';
        
            $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Drink'"; 
            $result = mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()) {
                echo'<div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/'. $row['Img_Link'] .');"></div>
                        <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
                            <span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                        
                        </div>
                        </div>';                
            }
        echo'</div>';

        echo'
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Mains</h3>';
        
            $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Main'"; 
            $result = mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()) {
                echo'<div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/'. $row['Img_Link'] .');"></div>
                        <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
                            <span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                        
                        </div>
                        </div>';                
            }
            echo'</div>';

        echo'
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>';
        
            $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Dessert'"; 
            $result = mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()) {
                echo'<div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/'. $row['Img_Link'] .');"></div>
                        <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
                            <span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                        
                        </div>
                        </div>';                
            }
            echo'</div>';

        echo'
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Appetisers</h3>';
        
            $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Appetiser'"; 
            $result = mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()) {
                echo'<div class="pricing-entry d-flex ftco-animate">
        			 <div class="img" style="background-image: url(images/'. $row['Img_Link'] .');"></div>
        			 <div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
	        				<span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
						
        			 </div>
        		     </div>';                
            }
            echo'</div>';

                echo'
                <div class="col-md-6 mb-5 pb-3">
                <h3 class="mb-5 heading-pricing ftco-animate">Coffee</h3>';
                
                    $sql = "SELECT * FROM `menu_details` WHERE Item_Type = 'Coffee'"; 
                    $result = mysqli_query($conn, $sql);
                    while($row = $result->fetch_assoc()) {
                        echo'<div class="pricing-entry d-flex ftco-animate">
                                <div class="img" style="background-image: url(images/'. $row['Img_Link'] .');"></div>
                                <div class="desc pl-3">
                                <div class="d-flex text align-items-center">
                                    <h3><span>'. htmlspecialchars($row['Item_Name']) .'</span></h3>
                                    <span class="price">£' . htmlspecialchars($row['Item_Cost']) . '</span>
                                </div>
                                <div class="d-block">
                                    <p>A small river named Duden flows by their place and supplies</p>
                                </div>
                                
                                </div>
                                </div>';                
                    }
                    echo'</div>';

        echo'</section>';
        }

    catch(Exception $e) {
        echo 'Incorrect Email or password';
}

?>


<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</HTML>
