<?php session_start();function active($currect_page){$url_array =  explode('/', $_SERVER['REQUEST_URI']) ;$url = end($url_array);  if($currect_page == $url){echo 'active';}}
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='coffee';


if (isset($_SESSION['SecretP'])){
	$password = $_SESSION['SecretP'];
	$email = $_SESSION['SecretE'];
	$conn  = mysqli_connect($host, $S_user, $S_password, $db);
	$sql = "SELECT * FROM user_details Where UserEmail= '$email'";
	$result = mysqli_query($conn, $sql);

				while ($row = $result -> fetch_row()) {
					$db_password = $row[3];
					$verify =password_verify($password, $db_password);
					if ($_SESSION['SecretE'] = 'admin@gmail.com'){
						$admin = true;
					}
			}
		
}




?>

<meta name="viewport" content="width=device-width, initial-scale=1.0"><meta charset="utf-8"><meta name="description"content="this is just a test login system all in the header"><meta name="application-name" content="Login/Logout"><meta name="theme-color" content="black">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"><link rel="stylesheet" href="css/custom.css"><link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"><link rel="stylesheet" href="css/animate.css"><link rel="stylesheet" href="css/owl.carousel.min.css"><link rel="stylesheet" href="css/owl.theme.default.min.css"><link rel="stylesheet" href="css/magnific-popup.css"><link rel="stylesheet" href="css/aos.css"><link rel="stylesheet" href="css/ionicons.min.css"><link rel="stylesheet" href="css/bootstrap-datepicker.css"><link rel="stylesheet" href="css/jquery.timepicker.css"><link rel="stylesheet" href="css/flaticon.css"><link rel="stylesheet" href="css/icomoon.css"><link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="css/custom.css">

<section id='hide'>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		<a class="navbar-brand" href="index.php">Bean &<small>Brew</small></a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		  	<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
			  	<li class="nav-item <?php active('index.php');?><?php active('');?>"><a href="index.php" class="nav-link">Home</a></li>
			  	<li class="nav-item <?php active('menu.php');?>"><a href="menu.php" class="nav-link">Menu</a></li>
			  	<li class="nav-item <?php active('rate_my_cake.php');?>"><a href="rate_my_cake.php" class="nav-link">Rate My Cake</a></li>
			  	<li class="nav-item <?php active('blog.php');?>"><a href="blog.php" class="nav-link">Blog</a></li>
			  	<li class="nav-item <?php active('about.php');?>"><a href="about.php" class="nav-link">About</a></li>
			  	<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
				
				<div class="dropdown-menu" aria-labelledby="dropdown04">
				  <a class="dropdown-item" href="shop.php">Shop</a>
				  <a class="dropdown-item" href="product-single.php">Single Product</a>
				  <a class="dropdown-item" href="room.php">Cart</a>
				  <a class="dropdown-item" href="checkout.php">Checkout</a>
				</div>

	
			  <li class="nav-item <?php active('contact.php');?>"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
			  
			  <?php if (isset($verify) && ($verify)): ?>
				<div style="display: flex;">
		
				
					<div style="flex-grow: 1;text-align: center;">
					<li class="nav-item">
					<?php echo '<p style="color:white;margin-right:30px;width:100%;height:100%;size:100%;margin-top:10px;"> Welcome back : ' . $_SESSION['SecretN'] . '<p>'; ?></li>
					</div>

					
					<div style="flex-grow: 1;text-align: center;">
					<li class="nav-item">
					<form name='form3' id='form1' method="post">
							<input style="margin-left:5px;width:100%;height:100%;size:100%;margin-top:10px;" class="btn btn-danger custom" type="submit" value="Logout" formaction="logout.php">
					</form></li>
					</div>
			  
				<?php else : ?>
				<div style="display: flex;">
				
					<div style="flex-grow: 1;text-align: center;">
					<li class="nav-item">
					<button style="margin-right:5px;width:100%;height:100%;size:100%;margin-top:10px;" class="btn btn-success" onclick="document.getElementById('login_form').style.display='block';invis()"> Login </button></li>
					</div>

					<div style="flex-grow: 1;text-align: center;">
					<li class="nav-item">
					<button style="margin-left:5px;width:100%;height:100%;size:100%;margin-top:10px;" class="btn btn-danger" onclick="document.getElementById('sign_up_form').style.display='block';invis()"> Register </button></li>
					</div>
					
				</div>

				<?php endif ; ?>
				
			</ul>
			</div>
	  	</div>
	</nav>
</section>
	<div name='form1' id="sign_up_form" class="modal">
	<span onclick="document.getElementById('sign_up_form').style.display='none';vis();" class="close" title="Close Modal">&times;</span>
	<form autocomplete="on"  class="modal-content" method="post">
		<div class="container">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		<input type="text" name="userid" placeholder="Username" required>
		<input type="text" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
		<div class="clearfix">
			<button type="button" onclick="document.getElementById('sign_up_form').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn" formaction="submit.php">Sign Up</button>
		</div>
		</div>
	</form>
	</div>

	<div name='form2' id="login_form" class="modal">
	<span onclick="document.getElementById('login_form').style.display='none';vis();" class="close" title="Close Modal">&times;</span>
	<form autocomplete="on"  class="modal-content" method="post">
		<div class="container">
		<h1>Login</h1>
		<p>Please fill in this form to log into an account.</p>
		<hr>
		<input type="text" name="email" placeholder="Email" required>
		<input type="password" name="password" placeholder="Password" required>
		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
		<div class="clearfix">
			<button type="button" onclick="document.getElementById('login_form').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signupbtn" formaction="login.php">Login</button>
		</div>
		</div>
	</form>
	</div>

<script>window.onclick = function(event) {if (event.target == document.getElementById('sign_up_form') || event.target == document.getElementById('login_form') || event.target == document.getElementById('new_item_form')){document.getElementById('sign_up_form').style.display = "none";document.getElementById('login_form').style.display = "none";document.getElementById('new_item_form').style.display='none';document.getElementById('book').style.display = 'block';document.getElementById('hide').removeAttribute("hidden")}};function vis(){document.getElementById('hide').removeAttribute("hidden");document.getElementById('book').style.display = 'block';}function invis(){document.getElementById('book').style.display = 'none';document.getElementById('hide').setAttribute('hidden', 'hidden');}</script>
	