<?php
session_start();
?>
<?php

if(!isset($_SESSION["login"]) ){
	header("location: /index.php");
	die();
}

if (isset($_GET['action']) == 'logout'){
  session_destroy();
  header("location: /index.php");
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


html {
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(98,98,225,1) 35%, rgba(0,212,255,1) 100%);
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<span class="loginlogoutlink w3-display-topright w3-padding ">
   <a title="Log Out" class="loginlogoutlink-logout w3-btn w3-round-large" href="?action=logout">Log Out</a>
</span>
<h2 style="text-align:center">Profile Page</h2>

<div class="card">
  <img src="img1.jpg" alt="John" style="width:100%">
  <h1>Zergaw Manyazewal</h1>
  <p class="title">CEO & Founder, KoloCMs </p>
  <p>Hawassa University</p>
  <div style="margin: 24px 0;">
    <a href="https://github.com/etdevops/koloCMS"><i class="fa fa-github"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

</body>
</html>
