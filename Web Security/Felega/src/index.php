<?php
session_start();

$users = array(
	"admin" => "28533cff6471de6ac6f8ba2a1f3dc6d888cf702f",
	"dev1" => "ff5d693de1c5495adf5004ff958ef6f049d6492e"
);



function lookup($username) {
	global $users;
	return array_key_exists($username, $users) ? $users[$username] : "";
}

if (isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$sha1pass = lookup($_POST['username']);
	if ($sha1pass == sha1($_POST['password'])){
		$_SESSION['login'] = true;
		$_SESSION['privilege'] = $_POST['username'] == "dev1" ? "dev1" : "admin";
		header("Location: /check.php");
		exit();
		
	}else{
		$fail = True;
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Felega</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    	<style>

		body, html {
		  height: 100%;
		  margin: 0;
		}

		html {
		  /* The image used */
		  background-image: url("bgimg.jpg");

		  /* Full height */
		  height: 100%; 

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		html .cont {
			filter: blur(0px);
		}
		label {
			color: yellow;
			font-size: 17px;
			font-weight: 200;
			font-style: inherit;
		}
	</style>
    </head>
    <body class="">
	<div id="bg"></div>
			<div class="cont w3-container w3-monospace w3-display-topmiddle">
				<div class="w3-monospace text-box">
					<h1 style="color:white;filter: blur(1px);">ፍለጋ</h1>
				</div>
			</div>
	<form method="POST" action="/">
          <div class="w3-container">
		<?php if (isset($fail))
{
    echo '<div class="w3-panel w3-card-4 w3-bottombar w3-monospace" style="color:red; font-weight:12px; background-color: black; font-size:20px;" ><a class=""></a><p>Invalid username or password</p></div>';
} ?>
	  </div>
	  <!-- <label>Username:</label> -->
	  <div class="form-field">
	    <input type="text"  placeholder="Username" name="username" required/>
	  </div>
	  
	  <!-- <label>Password:</label> -->
	  <div class="form-field">
	    <input type="password" name="password" placeholder="Password" required/>
	  </div>
	  
	  <div class="form-field">
	    <button class="btn" type="submit">Log in</button>
	  </div>
	</form>
	<!-- partial -->
  
</body>
</html>

