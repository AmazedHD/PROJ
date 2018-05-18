<!doctype html>
<html lang="en">
<head>
	<style>


        body {margin:0;}

	


        ul {
    font-family: Arial, Helvetica, sans-serif;
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
    font-family: Arial, Helvetica, sans-serif;
            float: right;
        }

        li a {
    font-family: Arial, Helvetica, sans-serif;
            float:right;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 15px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
    font-family: Arial, Helvetica, sans-serif;
        }

        .active {
            background-color: #00caa6;
        }
    body {
        background-color: #e2e2e2;
    font-family: Arial, Helvetica, sans-serif;
    }

        .signup-form {

            margin: 0 auto;
            padding-top: 30px;
            font-family: Arial, Helvetica, sans-serif;
            width: 30%;
            height: 10%;



        ;

        }


        .signup-form input {
            font-family: Arial, Helvetica, sans-serif;

            border: 10px solid white;


            width: 100%;
            height: 40px;
            padding: 0px 5%;
            margin-bottom: 4px;

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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>THE WALL - REGISTER</title>
</head>

    <h1>Registreren</h1>
    <form method="post" action="process_registration.php" class="signup-form">

        <label>Gebruikersnaam:<br><input type="text" name="username" class="a" /></label><br>
        <label>Mailadres:<br><input type="text" name="mailadres" /></label><br>
        <label>Password:<br><input type="password" name="password" /></label><br>
        <label>Herhaal Password:<br><input type="password" name="password2" /></label><br><br>
        <label><input type="submit" name="submit_registration" value="Registreer" /></label><br>

        <center><p>Already have a account? Login <a href=index.php>here!</a></p></center>
    </form>

</body>
</html>
