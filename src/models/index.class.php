<?php

class index extends db {
    public function getContacts() {
        $sql = "SELECT * FROM contact";
        $datas = $this->connect()->query($sql);
        while ($row = $datas->fetch()) {
            echo $row['id'];
        }
    }
}

?>