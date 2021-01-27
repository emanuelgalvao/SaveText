<?php

  require_once 'Connection.php';

  class NoteDAO extends Connection{

    private $route;
    private $note_content;

    public function getRoute() {
        return $this->route;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

    public function getNoteContent() {
        return $this->note_content;
    }

    public function setNoteContent($note_content) {
        $this->note_content = $note_content;
    }

    function insert(){
        $sql = "INSERT INTO notes (route_url, note_content, saved_at) VALUES (:route_url, :note_content, NOW())";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':route_url', $this->route);
        $stmt->bindParam(':note_content', $this->note_content);
        return $stmt->execute();
    }

    function update() {
        $sql = "UPDATE notes SET route_url = :route_url, note_content = :note_content, saved_at = NOW() WHERE route_url = :route_url";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':route_url', $this->route);
        $stmt->bindParam(':note_content', $this->note_content);
        return $stmt->execute();
    }

    function find($route_url) {
        $sql = "SELECT * FROM notes WHERE route_url = :route_url";
        $stmt = Connection::prepare($sql);
        $stmt->bindParam(':route_url', $route_url);
        $stmt->execute();
        return $stmt->fetch();
    }
    
  }

?>