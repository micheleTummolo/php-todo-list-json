<?php 
    /* Recupero dell array dal file json*/
    $string = file_get_contents('list.json');

    $toDoList = json_decode($string, true);

    if(isset($_POST['item'])){
    
        $toDoList[] = $_POST['item'];    

        file_put_contents('list.json',json_encode($toDoList));
    }

    header('Content-Type: application/json');
    echo json_encode($toDoList);
?>