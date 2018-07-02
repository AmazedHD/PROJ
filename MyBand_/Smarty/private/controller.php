<?php

// DATA OPHALEN EN EEN VIEW IN BEELD TONEN

function homepage_action() {

    global $smarty;
    global $page;
    $articles = get_articles();
    $smarty->assign('articles',$articles);

    $smarty->display('header.tpl');
    if (isset($_SESSION['logged_in'])) {
        $smarty->display('admin.tpl');
    } else {
        $smarty->display('menu.tpl');
    }
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');

}
function page_not_found_action(){
    global $smarty;
    $smarty->display('notfound.tpl');

}

function contact_action()
{
    global $smarty;
    global $page;
    // MODEL

    //VIEWS
    if (isset($_SESSION['logged_in'])) {
        switch ($page) {

            //VIEWS
            case $smarty->display('header.tpl');
            case $smarty->display('admin.tpl');
            case $smarty->display('contact.tpl');
            case $smarty->display('footer.tpl');
        }
    } else {
        switch ($page) {
            case $smarty->display('header.tpl');
            case $smarty->display('menu.tpl');
            case $smarty->display('contact.tpl');
            case $smarty->display('footer.tpl');
        }

    }
}

function news_action()
{
    global $smarty;
    global $pageno;
    global $page;
    global $searchterm;
    //model
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page', $pageno);
    $smarty->assign('number_of_pages', $number_of_pages);
    $smarty->assign('articles', $articles);
    // views
    if (isset($_SESSION['logged_in'])) {
        switch ($page) {

            //VIEWS
            case $smarty->display('header.tpl');
            case $smarty->display('admin.tpl');
            case $smarty->display('news.tpl');
            case $smarty->display('footer.tpl');
        }
    } else {
        switch ($page) {
            case $smarty->display('header.tpl');
            case $smarty->display('menu.tpl');
            case $smarty->display('news.tpl');
            case $smarty->display('footer.tpl');
        }
    }
}

function latest_action() {
    global $smarty;
    global $page;
    $articles = get_articles();
    $smarty->assign('articles',$articles);

    if (isset($_SESSION['logged_in'])) {
        switch ($page) {

            //VIEWS
            case $smarty->display('header.tpl');
            case $smarty->display('admin.tpl');
            case $smarty->display('latest.tpl');
            case $smarty->display('footer.tpl');
        }
    } else {
        switch ($page) {
            case $smarty->display('header.tpl');
            case $smarty->display('menu.tpl');
            case $smarty->display('latest.tpl');
            case $smarty->display('footer.tpl');
        }
    }
}

function login_action()
{
    global $page;
    global $smarty;

    // MODEL

    //VIEWS
    if (isset($_SESSION['logged_in'])) {
        switch ($page) {

            //VIEWS
            case $smarty->display('header.tpl');
            case $smarty->display('admin.tpl');
            case $smarty->display('login.tpl');
            case $smarty->display('footer.tpl');
        }
    } else {
        switch ($page) {
            case $smarty->display('header.tpl');
            case $smarty->display('menu.tpl');
            case $smarty->display('login.tpl');
            case $smarty->display('footer.tpl');
        }
    }
}

function post_action()
{
    global $page;
    global $smarty;

    $articles = get_some_articles();
    $smarty->assign('articles',$articles);
    $smarty->display('post.tpl');


    // MODEL
    if (isset($_SESSION['logged_in'])) {
        switch ($page) {

            //VIEWS
            case $smarty->display('header.tpl');
            case $smarty->display('admin.tpl');
            case $smarty->display('post.tpl');
            case $smarty->display('footer.tpl');
        }
    } else {
        switch ($page) {
            case $smarty->display('header.tpl');
            case $smarty->display('menu.tpl');
            case $smarty->display('notfound.tpl');
            case $smarty->display('footer.tpl');
        }

    }
}

    function logout_action()
    {
        global $page;
        global $smarty;

        // MODEL

        //VIEWS
        if (isset($_SESSION['logged_in'])) {
            switch ($page) {

                //VIEWS
                case $smarty->display('header.tpl');
                case $smarty->display('admin.tpl');
                case $smarty->display('logout.tpl');
                case $smarty->display('footer.tpl');
            }
        } else {
            switch ($page) {
                case $smarty->display('header.tpl');
                case $smarty->display('menu.tpl');
                case $smarty->display('logout.tpl');
                case $smarty->display('footer.tpl');


            }
        }

}



