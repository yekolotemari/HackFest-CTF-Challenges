<?php 

require "index.php";
session_destroy();
session_unset();
header("location: /");
die();