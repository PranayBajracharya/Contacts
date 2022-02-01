<?php

class IndexController extends Index {
    public function index() {
        $results = $this->getContacts();
        return $results;
    }
}