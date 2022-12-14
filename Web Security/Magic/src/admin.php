<?php
if(!isset($_COOKIE["user"])) {
 header("location:index.php");
} else{
foreach($_COOKIE as  $key => $val)
    {
      //echo "cookie name = ".$key.", and value = ".$val;
	  if ($key != "user" || $val != md5("admin")){
			  header("location:index.php");
			
	  }
	  
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Magic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Instructors of </h2>
  <p>Hogwarts School of Witchcraft and Wizardry</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Photo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Harry</td>
        <td>Potter</td>
        <td>harry@magic.com</td>
		<td>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		  Select image to upload:
		  <input type="file" name="fileToUpload" id="fileToUpload">
		  <input type="submit" value="Upload Image" name="submit">
		</form>
		</td>
      </tr>
      <tr>
        <td>Albus</td>
        <td>Dumbledore</td>
        <td>dumbledore@magic.com</td>
		<td>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		  Select image to upload:
		  <input type="file" name="fileToUpload" id="fileToUpload">
		  <input type="submit" value="Upload Image" name="submit">
		</form>
		</td>
      </tr>
      <tr>
        <td>Rubeus</td>
        <td>Hagrid</td>
        <td>hagrid@magic.com</td>
		<td>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		  Select image to upload:
		  <input type="file" name="fileToUpload" id="fileToUpload">
		  <input type="submit" value="Upload Image" name="submit">
		</form>
		</td>
      </tr>
    </tbody>
  </table>
  
  <a href="logout.php">Logout</a>
</div>

</body>
</html>
