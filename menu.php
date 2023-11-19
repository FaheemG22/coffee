<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>
  <?php include "./header.php"?>
  
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>



<?php
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
    else{echo "db connection error because of".mysqli_connect_error();}

    try{
      echo '<div>';
      if (isset($admin) && ($admin)){
        echo'
        <div name="form3" id="new_item_form" class="modal">
        <span onclick="document.getElementById("new_item_form").style.display="none";" class="close" title="Close Modal">&times;</span>
        <form autocomplete="on"  class="modal-content" method="post" action="upload.php" enctype="multipart/form-data" style="width:40%;min-width:250px;min-height:500px;">
          <div class="container">
          <h1>New Item</h1>
          <p>Please fill in this form to create a new menu item</p>
          <hr>
          
          <div class="mb-3">
          <input type="text" name="Name" placeholder="Dish Name" required>
              <input type="number" min="0.50" step="0.05" name="Price" placeholder="Dish Price" required style="min-width:150px;">
          
          <div>	
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 30%;height:50px;" name="Type">
          <option value="Main" class="text-white bg-dark">Main</option>
          <option value="Appetiser" class="text-white bg-dark">Appetiser</option>
          <option value="Drink" class="text-white bg-dark">Drink</option>
          <option value="Coffee" class="text-white bg-dark">Coffee</option>
          </select>
          <img id="blah" src="#" alt="your image" / style="width: 15%;height: auto;">
          </div>
          <input class="form-control form-control-bg bg-dark text-white" id="fileToUpload" name="fileToUpload" required type="file">
          
          </div>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          <div class="clearfix">
            <button type="button" onclick="document.getElementById("new_item_form").style.display="none"" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" formaction="upload.php">Submit</button>
          </div>
          </div>
        </form>
      </div>
      <script>
      fileToUpload.onchange = evt => {
        const [file] = fileToUpload.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
      </script>';

      echo'
      <button class="btn btn-danger" onclick="items()"> Add new item to menu </button></li>
      </div>';
    }
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


    catch(Exception $e) {
        echo 'Incorrect Email or password';
}

?>
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script>function items(){document.getElementById('new_item_form').style.display='block';invis()}</script><script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"></script><script src="js/google-map.js"></script><script src="js/main.js"></script>
    
  </body>
</html>