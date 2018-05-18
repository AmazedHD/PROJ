<?php

// ERRORS

// DIT ZIJN ERROR DIE KOMEN TIJDENS HET INLOGGEN
if (($_GET['message']) == "iets-mis") {
    echo "<div class='message-error'><p>Check of je je gegevens goed hebt ingevuld!</p></div>";
} elseif (($_GET['message']) == "input-empty") {
    echo "<div class='message-error'><p>Je hebt een veld leeg gelaten!</p></div>";
} elseif (($_GET['message']) == "pass-wrong") {
    echo "<div class='message-error'><p>Je wachtwoord klopt niet!</p></div>";
} elseif (($_GET['message']) == "username-wrong") {
    echo "<div class='message-error'><p>Je gebruikersnaam klopt niet!</p></div>";
} elseif (($_GET['message']) == "uitgelogd") {
    echo "<div class='message-error'><p>Je bent uit gelogd!</p></div>";
}

// ERRORS BIJ HET INLOGGEN
if (($_GET['message']) == "name-wrong") {
    echo "<div class='message-error'><p>In je voor -en achternaam mogen alleen letters!</p></div>";
} elseif (($_GET['message']) == "email-wrong") {
    echo "<div class='message-error'><p>Je e-mail klopt niet!</p></div>";
} elseif (($_GET['message']) == "already-taken") {
    echo "<div class='message-error'><p>Het e-mail en/of gebruikersnaam is al gebruikt!</p></div>";
}


// DIT ZIJN MESSEGES BIJ SUCCSES

// INGELOGD IN SUCCSES
if (($_GET['message']) == "login-success") {
    echo "<div class='message-success'><p>Je bent ingelogd!</p></div>";
}

if (($_GET['message']) == "signup-success") {
    echo "<div class='message-success'><p>Je hebt een account gemaakt!</p></div>";
}


?>