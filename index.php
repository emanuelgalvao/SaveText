<?php

    include "controller/ReenderController.php";

    $route = $_SERVER['REQUEST_URI'];
    
    $reenderController = new ReenderController();

    if($route == "/"){
        $reenderController->ReenderIndex();
    }else{
        $reenderController->ReenderNote($route);
    }

?>