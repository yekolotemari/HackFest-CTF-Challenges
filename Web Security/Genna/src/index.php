<?php
   if(isset($_FILES['design'])){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["design"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

/* // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["design"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
} */

if($_FILES['design']['type'] != "image/gif" && $_FILES['design']['type'] != "image/jpeg" && $_FILES['design']['type'] != "image/png" ){


echo "Only Gif, JPG and PNG are allowed";
	$uploadOk = 0;
	
}else
{$uploadOk = 1;
}
// Check if file already exists
if (file_exists($target_file)) {
	unlink("$target_file");
  $uploadOk = 1;
}


// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
 // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
 // $uploadOk = 0;
//}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["design"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["design"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
   }}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}







* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
  height: 500px;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>ገና / Genna PostCard</h2>
  <p>A special postcard for your loved ones.</p>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
     <div class="container">
	 <p>
Do you want the perfect postcard delivered to your loved ones on ገና/Genna, Then you come to the right place. Just send as the design you want to put on your postcard and fill out the below form, we will take care of the rest. We will print and deliver your postcard. 
</p></br></br>
  <form action="index.php" method="post" enctype="multipart/form-data">

    <label for="fname">Receiver Name</label>
    <input type="text" id="receiver" name="receiver" placeholder="Receiver name..">

    <label for="lname">Sender Name</label>
    <input type="text" id="sender" name="sender" placeholder="Sender name..">

    <label for="subject">Your Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>


	<input type="file" name="design" id="design" name="design">
    <input type="submit" value="Submit">

  </form>
</div>
    </div>
    <div class="column-33">
        <img src="images/genna.jpg" width="335" height="471">
    </div>
  </div>
</div>



</body>
</html>
