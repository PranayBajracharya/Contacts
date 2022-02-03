<?php

class IndexController extends Index {
    public function index($user_id) {
        $results = $this->getContacts($user_id);
        return $results;
    }
}