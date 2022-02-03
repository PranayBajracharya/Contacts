<?php

class Index extends Db {
    public function getContacts($user_id) {
        $sql = "SELECT * FROM contact WHERE user_id = $user_id AND deleted_at IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }
}
