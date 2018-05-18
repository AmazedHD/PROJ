<?php
session_start();

// CHECKEN OF DE GEBRUIKER VERDWAALD IS
if (!isset($_SESSION['userid'])) {
    if (!isset($_COOKIE['userid'])) {
        header('Location: loginsystem/uitlogpoort.php');

    } else {
        require ('loginsystem/cookiecheck.php');
        $_SESSION['userid'] = $_COOKIE['userid'];
        $_SESSION['hash'] = $_COOKIE['hash'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <style>


        body {margin:0;}

        @font-face {
            font-family: "DK Longreach";

        }

        div {
            font-family: "DK Longreach";
        }


        ul {
            float:right;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
            position: fixed;
            top: 0;
            width: 100%;


        }

        li {
            float: right;
        }

        li a {
            float:right;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 15px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #00caa6;
        }
    </style>
</head>
<body>




<ul>


    <a href=index.php>  <img src="kak2.png" style="width:360px;"> </a>
    <a href=index2.php>  <img src="upload4.png"  style="border-bottom: solid white 5px;float:left;width:280px;"> </a>
   <a href=/ma/bewijzenmap/periode1.3/proj/Website/loginsystem/register.php>    <img src="signup.png" style="border-top: solid white 5px;float:right;width:200px;"> </a>
    <a href=/ma/bewijzenmap/periode1.3/proj/Website/loginsystem/index.php>   <img src="signin.png"  style="border-top: solid white 5px;float:right;width:200px;"> </a>

</ul>

</body>
</html>


<?php

  // Create database connection

  $db = mysqli_connect("localhost", "images", "images", "image_upload");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
    body {
        background-color: #e2e2e2;
    }


   #content{
   	width: 50%;
   	margin: 5px auto;
   	border: 10px solid white;
       border-radius: 12px;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
        border-top: solid white 25px;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;

   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;

   }
   img{
   	float: left;
   	margin: 0px;
   	width: 100%;
   	height: auto;

   }
   .masonry { /* Masonry container */
       column-count: 3;
       column-gap: 0;

   }
</style>
</head>
<body>
<div id="content">
    <div class="masonry">

        </div>
  <form method="POST" action="index.php" enctype="multipart/form-data" >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="image_text"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>
