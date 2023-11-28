<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include "./header.php"?>
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay" style="filter: blur(8px);-webkit-filter: blur(8px);"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
</section>
    
<section class="ftco-section" style="background-image:url(images/bg_6.jpg);">
<!--
  filter: blur(8px);-webkit-filter: blur(8px);
-->
    <div class="container ftco-animate">
      <div class="modal" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
        <div class="modal-content border rounded-3" style="width:100%;min-width:250px;min-height:500px;">
          <div class="container">
              <div class="heading-section ftco-animate ">
              
                <div>
                <span class="subheading text-center">Temp Cake Name</span>
                </div>
                
                <div>
                <span class="subheading text-center" style="font-size:35px;margin-top:20px;">2023-11-28 14:56:09</span>
                </div>
              </div>
          
              <hr>

              <img src="images/about.jpg" class="img-thumbnail rounded mx-auto d-block" style="height:min-content;">
            
              <hr>
              <div class="ftco-animate d-flex justify-content-center" style="margin-top:-40px;">
                <div class="heart"></div>
              </div>

              <div class="ftco-animate d-flex justify-content-center">
                <p class="text-center" style="border: 2px solid white;border-radius: 15px;margin-top:-25px;height:50px;width:150px;font-size:x-large;"> 100 Likes</p>
              </div>

          </div>            
        </div>
      </div>
    </div>
      </section>
<!--heart styling and js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
.heart {width: 100px;height: 100px;background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;background-position: 0 0;cursor: pointer;transition: background-position 5s steps(28);transition-duration: 0s;}
.heart.is-active {transition-duration: 1s;background-position: -2800px 0;}
</style>

<script>
$(function () {$(".heart").on("click", function () {$(this).toggleClass("is-active");});});
</script>

<script>function items(){document.getElementById('new_item_form').style.display='block';invis()}</script><script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"></script><script src="js/google-map.js"></script><script src="js/main.js"></script>

</html>