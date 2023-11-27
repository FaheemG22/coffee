<meta name="viewport" content="width=device-width, initial-scale=1.0"><meta charset="utf-8"><meta name="description"content="this is just a test login system all in the header"><meta name="application-name" content="Login/Logout"><meta name="theme-color" content="black">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"><link rel="stylesheet" href="css/custom.css"><link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"><link rel="stylesheet" href="css/animate.css"><link rel="stylesheet" href="css/owl.carousel.min.css"><link rel="stylesheet" href="css/owl.theme.default.min.css"><link rel="stylesheet" href="css/magnific-popup.css"><link rel="stylesheet" href="css/aos.css"><link rel="stylesheet" href="css/ionicons.min.css"><link rel="stylesheet" href="css/bootstrap-datepicker.css"><link rel="stylesheet" href="css/jquery.timepicker.css"><link rel="stylesheet" href="css/flaticon.css"><link rel="stylesheet" href="css/icomoon.css"><link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="css/custom.css">
<span id="refresh"></span>

<script>
function showHint() {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("refresh").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "menu_update.php?q=");
  xmlhttp.send();
  }
showHint()
setInterval(showHint,5000)
</script>

<script>window.onclick = function(event) {if (event.target == document.getElementById('sign_up_form') || event.target == document.getElementById('login_form') || event.target == document.getElementById('new_item_form')){document.getElementById('sign_up_form').style.display = "none";document.getElementById('login_form').style.display = "none";document.getElementById('new_item_form').style.display='none';document.getElementById('book').style.display = 'block';document.getElementById('hide').removeAttribute("hidden")}};function vis(){document.getElementById('hide').removeAttribute("hidden");document.getElementById('book').style.display = 'block';}function invis(){document.getElementById('book').style.display = 'none';document.getElementById('hide').setAttribute('hidden', 'hidden');}</script>
<script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"></script><script src="js/google-map.js"></script><script src="js/main.js"></script>