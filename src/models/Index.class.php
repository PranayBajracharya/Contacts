<?php

class Index extends Db {
    public function getContacts() {
        $sql = "SELECT * FROM contact";
        $datas = $this->connect()->query($sql);
        while ($row = $datas->fetch()) {
            echo $row['id'] . ' ' . $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['nick_name'] . ' ' . $row['email'] . '<br>';
        }
    }
}

?>