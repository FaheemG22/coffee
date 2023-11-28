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
            	<h1 class="mb-3 mt-5 bread">Rate My Cake</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Rate My Cake</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

  <?php if (isset($verify) && ($verify)){ 
  echo'
    <section class="ftco-section" style="background-color:#ffd299;">
    <div class="container">
    <div name="form1"  class="modal" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
    <form autocomplete="on"  class="modal-content" method="post" action="upload.php" enctype="multipart/form-data" style="width:100%;min-width:250px;min-height:500px;">
            <div class="container">
            <div class="heading-section ftco-animate ">
            <span class="subheading">Upload</span>
            <br>
              <span class="subheading">Your Own Cake</span>
            </div>
            <br>
            <hr>
            
            <div class="mb-3">
            <input type="hidden" name="UserID" value="<?php echo $user_ID ?>">
            <input type="text" name="Name" placeholder="Name your Cake" required>
            <div>	

            <img id="blah" src="#" alt="your image" style="width: 30%;height: auto;">
            </div>
            <input class="form-control form-control-bg bg-dark text-white" id="fileToUpload" name="fileToUpload" required type="file">
            
            </div>

            <p>By Uploading An Image You Agree To Our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div class="clearfix">
              <button type="submit" class="signupbtn" formaction="cake_upload.php" style="width:100%;">Submit</button>
            </div>
            </div>
          </form>
        </div>
      </section>
      <script>
      blah.style.display="none";
      fileToUpload.onchange = evt => {
        const [file] = fileToUpload.files
        if (file) {
          blah.src = URL.createObjectURL(file)
          blah.style.display="block";
        }
      }
      </script>';
    }

else { 
  echo'
  <section class="ftco-section" style="background-color:#ffd299;">
    <div class="container">
    <div name="form1"  class="modal" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
    <form autocomplete="on"  class="modal-content" enctype="multipart/form-data" style="width:100%;min-width:250px;min-height:500px;">
            <div class="container">
            <div class="heading-section ftco-animate ">
            <span class="subheading">Please Login</span>
            <br>
              <span class="subheading">To Use</span>
            </div>
            <br>
            <hr>
          <p style="font-size:20px"> This feature is locked behind the login system to contiune please use an actual account please :) </p>
            </div>
          </form>
        </div>
      </section>
      ';
}
      ?>





    <?php include "./footer.php"?>
  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  </body>
</html>
<script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"></script><script src="js/google-map.js"></script><script src="js/main.js"></script>