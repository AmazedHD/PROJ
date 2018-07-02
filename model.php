<?php










//if($_POST['submit']) {
//    $member_username = "admin";
//    $member_password = "admin";
//
//    $username = $_POST['username'];
//    $username = strtolower($username);
//    $password = $_POST['password'];
//
//    if ($username == $member_username && $password == $member_password) {
//        $_SESSION['username'] = $username;
//        header('Location: index.php');
//    } else {
//        echo "Incorrect : Username or Password";
//    }
//}
//
//session_start();
//
//if (isset($_SESSION['username'])) {
//    $username = $_SESSION['username'];
//} else {
//    header('Location: index.php?page=login');
//}







function make_connection()  {
    $mysqli = new mysqli('localhost','root','','myband_db');
    if ($mysqli->connect_errno) {
        die('Connection error ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die ('Error Preparing 1.');
    $stmt->bind_result($title) or die ('Error binding 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $title;
    }
    return $results;

}

function get_some_articles(){

    global $pageno, $searchterm;
    $mysqli = make_connection();
    $firstrow = ($pageno - 1) * ARTICLES_PER_PAGE;
    $per_page = ARTICLES_PER_PAGE;

    $query =   "SELECT title, content, imagelink ";
    $query .=  "FROM articles ";
    $query .=  "WHERE title LIKE ? OR ";
    $query .=  "content LIKE ? ";
    $query .=  "ORDER BY article ";
    $query .=  "DESC LIMIT $firstrow,$per_page";



    $stmt = $mysqli->prepare($query) or die ('Error Preparing 5.');
    $stmt->bind_param('ss',$searchterm,$searchterm) or die ('Error binding Search Term');
    $stmt->bind_result($title, $content, $imagelink) or die ('Error binding 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $article = array();
        $article[] = $title;
        $article[] = $content;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function calculate_pages() {

    $mysqli = make_connection();
    $query = "SELECT * FROM articles";
    $result = $mysqli->query($query) or die ('Error Querying2');
    $rows = $result->num_rows;
//    echo $rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}

function get_number_of_pages(){
    $number_of_pages = calculate_pages() or die ('Error calculating');
    return $number_of_pages;
}




function verify_login()
{
    global $_SESSION;
    $username = $_POST['username_log'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['logged_in'] = 'logged_in';
        ?>
        <html>
        <body>
        <p style="margin-top: 5%; background-color: rgba(0,255,20,0.35); font-size: 125%; text-align: center">You are now logged in, welcome!</p>
        <p style="margin-top: 1%; background-color: rgba(0,255,20,0.35); font-size: 125%; text-align: center">Click <a href="index.php?page=post">here </a>to make changes, upload or delete posts. </p>

        </body>
        </html>
<?php
        header('Location: index.php');

    } else {

        ?>
        <html>
        <body>
        <p style="margin-top: 5%; background-color: rgba(255,0,29,0.35); font-size: 125%; text-align: center">Password or Username incorrect, please try again.</p>
        </body>
        </html>
        
        <?php
    }
}

//function post_action() {
//    global $smarty;
//        $articles = get_some_articles();
//        $smarty->assign('articles',$articles);
//            $smarty->display('post.tpl');
//
//}



