<?php
session_start();


if(isset($_COOKIE['userid']) OR isset($_SESSION['userid'])) {

    header('Location: welkom.php');
}



?>


<!doctype html>
<html lang="en">
<head>


	<style>


        body {margin:0;}

        @font-face {
            font-family: "DK Longreach";
            src: url(sansation_light.woff);
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
    body {
        background-color: #e2e2e2;
    }


.signup-form {

    margin: 0 auto;
    padding-top: 30px;
 font-family: Arial, Helvetica, sans-serif;
	width: 30%;
	height: 10%;
 margin: left;


;

}


.signup-form input {
 	font-family: Arial, Helvetica, sans-serif;

    border: 10px solid white;

	
    width: 100%;
    height: 40px;
    padding: 0px 5%;
    margin-bottom: 4px;
	margin: left;
    border: none;
    background-color: #fff;
    font-family: Arial;
    font-size: 16px;
    color: #111;
    line-height: 40px;
	
}
    </style>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COOKIES en SESSIONS</title>
</head>
<body>



<ul>


    <a href=../index.php>  <img src="kak2.png" style="width:360px;float:left"> </a>
    <a href=../index2.php>    <img src="upload4.png"  style="border-bottom: solid white 1px;width:280px;">  </a>
    <a href=register.php>    <img src="signup.png" style="border-top: solid white 5px;float:right;width:200px;"></a>
    <a href=index.php>     <img src="signin.png"  style="border-top: solid white 5px;float:right;width:200px;"></a>

</ul>
<h1>COOKIES en SESSIONS</h1>
<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, "user=not_registered") == true) {
    echo '<center><h2 style="color:#ff3150; font-family: Arial, Helvetica, sans-serif; background-color: #ffd2d9;">You first have to make a account or login to upload!</h2></center>';
}

?>

<form method="post" action="inlogpoort.php"  class="signup-form">
	<h1> Log in here! </h1>
    <label>Email:<input type="text" name="username"/></label>
    <label>Password:<input type="password" name="password" /></label>
    <input type="submit" name="submit_login" value="GO!"   />

	<center><p>Don't have a account yet? sign up <a href=register.php>here!</a></p></center>

</form>


</body>
</html>
