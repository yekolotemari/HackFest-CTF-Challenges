<?php
session_start();
?>
<?php

if(!isset($_SESSION["login"]) ){
	header("location: /index.php");
  die();
}else{
  if (isset($_SESSION['privilge']) && $_SESSION['privilge'] === "dev1"){
    echo '<div class="w3-panel w3-yellow w3-card-4"><p>i can only give the flag to admins onlys!!!</p></div>';
  }
}

if (isset($_GET['action']) == 'logout'){
  session_destroy();
  header("location: /index.php");
  exit();
}

echo '<div class="w3-panel w3-yellow w3-card-4"><p>i can only give the flag to admins only!!!</p></div>';
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Developers CMS</title>

  <style>
  body {
    
    margin: 0 auto;
    max-width: 800px;
    padding: 0 20px;
  }
  
  .container {
    border: 2px solid #dedede;
    background-color: #f1f1ff;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
  }
  
  .darker {
    border-color: #ccc;
    background-color: #ddd;
  }
  
  .container::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
  }
  
  .container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
  }
  
  .time-right {
    float: right;
    color: #aaa;
  }
  
  .time-left {
    float: left;
    color: #999;
  }
  </style>
</head>
<body>

<h2>Chat Messages</h2>
<span class="loginlogoutlink w3-display-topright w3-padding ">
   <a title="Log Out" class="loginlogoutlink-logout w3-btn w3-round-large" href="?action=logout">Log Out</a>
</span>
<div class="container">
  <a href="profile/"> <img src="https://w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"></a>
  <code><a href="/dev/profile/">Admin</a></code>
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="https://www.w3schools.com/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <a href="profile/"> <img src="https://w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"></a>
  <code><a href="/dev/profile/">Admin</a></code>
  <p>Sweet! So, Have You Fixed the issue on the login page?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="https://www.w3schools.com/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I was busy i will try to commit the patch this weekdays</p>
  <span class="time-left">11:05</span>
</div>

<div class="container">
  <a href="profile/"> <img src="https://w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:100%;"></a>
  <code><a href="/dev/profile/">Admin</a></code>
  <p>Okay, do it as possible as you can...</p>
  <span class="time-right">11:02</span>
</div>
  
</body>
</html>
