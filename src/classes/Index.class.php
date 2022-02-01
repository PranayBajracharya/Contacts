<?php

class Index extends Db {
    public function getContacts() {
        $sql = "SELECT * FROM contact";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }
}
