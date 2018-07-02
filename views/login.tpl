


{*<form class="modal-content animate" id="login" action="index.php" method="post">*}
    {*<div class="container">*}
        {*<h1>Inloggen</h1>*}
        {*<p class="text">Vul de volgende gegevens in om in te loggen.</p>*}
        {*<hr>*}
        {*<br>*}
        {*<label><b>Username</b></label>*}
        {*<input type="text" placeholder="Username" name="username_log" required>*}
        {*<br><br>*}
        {*<label><b>Wachtwoord</b></label>*}
        {*<input type="password" placeholder="Wachtwoord" name="password" required>*}
        {*<button type="submit" name="submit_login">Login</button>*}
    {*</div>*}
{*</form>*}





<form class="modal-content" method="post" id="login" action="index.php?page=login">
    <div  style="margin-top: 2%; margin-left: 20%">
        <h1>Login</h1>
        <br>
        <p>This system is only available for the blogger and the webmaster,<br>
            click <a href="index.php?page=home">here</a> to go back to the homepage.
        </p>
        <br>
        <input name="username_log"  placeholder="username" type="text" required>
        <br>
        <br>
        <input name="password" placeholder="password" type="password" required>
        <br>
        <br>
        <input type="submit" name="submit_login" value="Login">


    </div>

</form>