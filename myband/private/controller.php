<?php

// DATA OPHALEN EN EEN VIEW IN BEELD TONEN

function homepage_action($smarty) {
    $mailadresses = get_mailadresses();
    $smarty->assign('mailadresses',$mailadresses);
    $smarty->display('home.tpl');
}
