<?php

session_start();
include './html/header.html';
include './html/nav.php';

if(isset($_GET["page"])){
    $page = $_GET["page"];

    switch ($page) {
        case 'especes':
            include './frontoffice/especes.php';
            break;
        case 'films':
            include './frontoffice/films.php';
            break;
        case'planetes':
            include './frontoffice/planetes.php';
            break;
    }
}else{
    include './frontoffice/accueil.php';
}

include './html/footer.html';
?>