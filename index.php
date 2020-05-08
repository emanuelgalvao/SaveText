<?php

    include "controller/ReenderController.php";

    $rote = $_SERVER['REQUEST_URI'];
    
    $reenderController = new ReenderController();

    if($rote == ""){
        $reenderController->ReenderIndex();
    }else{
        $reenderController->ReenderNote();
    }

?>