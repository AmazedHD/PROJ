<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <meta charset="utf-8">
    <title>Project MyBand</title>
    <meta name="author" content="Oliver Scargo">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.jpg" type="image/jpg" sizes="500x500">

</head>


<body>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">


    (function() {

        var documentElem = $(document),
            nav = $('nav'),
            lastScrollTop = 0;



        documentElem.on('scroll', function() {
            var currentScrollTop = $(this).scrollTop();

            //scroll down
            if ( currentScrollTop > lastScrollTop ) nav.addClass('hidden');
            //scroll up
            else nav.removeClass('hidden');

            lastScrollTop = currentScrollTop;
        });



    })();
</script>
<br>
<br>
<br>
<br>



