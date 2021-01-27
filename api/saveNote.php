<?php

    require '../controller/NoteController.php';

    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $route = $data['route'];
    $note_content = $data['note_content'];

    $noteController = new NoteController();

    $note = $noteController->saveNote($route, $note_content);

    $return = new stdClass();

    if ($note) {
        $return->status = "SUCCESS";
        $return->message = "";
        $return->data = $note;
        echo json_encode($return);
    } else {
        $return->status = "ERROR";
        $return->message = "Note not found!";
        $return->data = "";
        echo json_encode($return);
    }

?>