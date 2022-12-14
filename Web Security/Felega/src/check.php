<?php
session_start();
if (!isset($_SESSION['login'])){
        header('location: index.php');
        
}

if ($_SESSION['privilege'] === "dev1"){
	header("location:/dev/");
	
}else{
	header("location:/admin/");
	
}
