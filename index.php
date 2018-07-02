

<?php

session_start();



require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir(    '../private/views');

define('ARTICLES_PER_PAGE',5);

// TERNARY OPERATOR
$page =  isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno'])? $_GET['pageno'] : '1';
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm'] . '%' : '%';

if (isset($_SESSION['logged_in'])) {
    switch ($page) {
        case 'home': homepage_action(); break;
        case 'news': news_action(); break;
        case 'contact': contact_action(); break;
        case 'latest': latest_action(); break;
        default: page_not_found_action(); break;
        case 'post' : post_action(); break;
        case 'admin' : admin_action(); break;
        case 'logout' : logout_action(); break;
        case 'cms' : cms_action(); break;
    }
} else {
    switch ($page) {
        case 'home': homepage_action(); break;
        case 'news':news_action(); break;
        case 'contact':contact_action();break;
        case 'latest':latest_action();break;
        case 'login':login_action();break;
        default:     page_not_found_action();break;
        case 'menu' :post_action();break;



    }
}


if (isset($_POST['submit_login'])) {
    verify_login();
}

if(isset($_SESSION['logged_in'])) {

    ?>
    <html>
    <body>
<!--    <p style="margin-top: 0.1%; background-color: rgba(0,255,20,0.35); font-size: 125%; text-align: center">You are now logged in, welcome!</p>-->
<!--    <p style="margin-top: 0.1%; background-color: rgba(0,255,20,0.35); font-size: 125%; text-align: center">Click <a href="index.php?page=post">here </a>to make changes, upload or delete posts. </p>-->
    </body>
    </html>
<?php
}


?>


