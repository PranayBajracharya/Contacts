<?php

class Index extends Db {
    public function getContacts($user_id) {
        $sql = "SELECT * FROM contact WHERE user_id = $user_id AND deleted_at IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }

    public function getFavouriteContacts($user_id) {
        $sql = "SELECT * FROM contact WHERE user_id = $user_id AND favourite = 1 AND deleted_at IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }

    public function getDeletedContacts($user_id) {
        $sql = "SELECT * FROM contact WHERE user_id = $user_id AND deleted_at IS NOT NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }

    public function countContacts($user_id) {
        $sql = "SELECT COUNT(id) as contacts, COUNT(NULLIF(0, favourite)) as favourites FROM contact WHERE user_id = $user_id AND deleted_at IS NULL";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }
}
