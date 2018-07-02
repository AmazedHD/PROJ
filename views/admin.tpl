<nav class="document" role='navigation'>
    <form method="get" action="index.php">
        <a href="index.php?page=home">
            <img src="images/logo.png" style="width: 10%; margin-top: 1%; margin-left: 2%;"  class="zoom" alt="Image">
        </a>
        <ul>


            <li><a href="index.php?page=home">Home</a></li>

            <li><a href="index.php?page=post">Post</a></li>


            <li><a href="index.php?page=contact">Contact</a>

                <ul>
                    <li><a href="index.php?page=logout">Logout</a>
                </ul>
            <li><a href="index.php?page=news">News</a>
                <ul>
                    <li><a href="index.php?page=news">Latest</a></li>
                    <li><a href="index.php?page=latest">History</a></li>

                </ul>
            </li>

            <input class="searchbar" name="page" type="hidden" value="news" placeholder="Search...">
            <input class="searchbar" name="searchterm" placeholder="Search...">
            <input class="zoom2 searchbar" type="submit" name="submit" value="Search" style="background-color: white;" >
    </form>
    </ul>
</nav>


