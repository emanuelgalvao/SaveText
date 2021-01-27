<?php

    require '../dao/NoteDAO.php';

    class NoteController {

        function findNote($route) {

            $noteDAO = new NoteDAO();
            $noteDB = $noteDAO->find($route);

            return $noteDB;

        }

        function saveNote($route, $note_content) {

            $noteDAO = new NoteDAO();
            $noteDB = $noteDAO->find($route);

            $noteDAO->setRoute($route);
            $noteDAO->setNoteContent($note_content);

            if($noteDB){
                $noteDAO->update();
            } else {
                $noteDAO->insert();
            }

            $noteDB = $noteDAO->find($route);

            return $noteDB;

        }
    }

?>