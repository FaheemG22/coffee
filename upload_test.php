<!DOCTYPE html>
<html>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<link rel="stylesheet" href="css/custom.css">
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
<link rel="stylesheet" href="css/custom.css">

<div>
<button class="btn btn-danger" onclick="document.getElementById('sign_up_form').style.display='block';invis()"> Register </button></li>
</div>

<div name='form1' id="sign_up_form" class="modal">
	<span onclick="document.getElementById('sign_up_form').style.display='none';" class="close" title="Close Modal">&times;</span>
	<form autocomplete="on"  class="modal-content" method="post" action="upload.php" enctype="multipart/form-data" style="width:40%;min-width:250px;min-height:500px;">
		<div class="container">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		
		<div class="mb-3">
		<input type="text" name='Name' placeholder="Dish Name" required>
        <input type="number" min="0.50" step="0.05" name='Price' placeholder="Dish Price" required style="min-width:150px;">
		
		<div>	
		<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 30%;height:50px;" name='Type'>
		<option value="Main" class="text-white bg-dark">Dish Type</option>
		<option value="Appetiser" class="text-white bg-dark">One</option>
		<option value="Drink" class="text-white bg-dark">Two</option>
		<option value="Coffee" class="text-white bg-dark">Three</option>
		</select>
		
		</div>
		<input class="form-control form-control-bg bg-dark text-white" id="fileToUpload" required type="file">
        </div>

		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
		<div class="clearfix">
			<button type="button" onclick="document.getElementById('sign_up_form').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn" formaction="submit.php">Submit</button>
		</div>
		</div>
	</form>
</div>

</body>
<script>
	window.onclick = function(event) {
	if (event.target == document.getElementById('sign_up_form') || event.target == document.getElementById('login_form')) {
		document.getElementById('sign_up_form').style.display = "none";
		document.getElementById('login_form').style.display = "none";
		document.getElementById('book').style.display = 'block';
		document.getElementById('hide').removeAttribute("hidden")}
	}

	function vis(){
		$('body').css("overflow", "hidden");
		document.getElementById('hide').removeAttribute("hidden")
		document.getElementById('book').style.display = 'block';
	}

	function invis(){
		document.getElementById('book').style.display = 'none';
		document.getElementById('hide').setAttribute('hidden', 'hidden');
	}
</script>

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
<script src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap&v=weekly"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</html>