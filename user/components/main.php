<?php

if(isset($_GET['menu'])){
    $menu = $_GET['menu'];

    switch($menu){
        case '1' : include('all_candidate.php'); break;
        case '2' : include('change_password.php'); break;
        case '3' : include('change_profile.php'); break;
        case '4' : include('myvote.php'); break;
}
}

?>