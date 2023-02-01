<?php 
    /* Recupero dell array dal file json*/
    $string = file_get_contents('list.json');

    header('Content-Type: application/json');
    echo $string;
?>