<?php

class db {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'contacts';

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $db = new PDO($dsn, $this->user, $this->password);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
}

?>