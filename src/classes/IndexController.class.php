<?php

class IndexController extends Index {
    public function index($user_id) {
        $results = $this->getContacts($user_id);
        return $results;
    }

    public function favourite($user_id) {
        $results = $this->getFavouriteContacts($user_id);
        return $results;
    }
}