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

    public function deleted($user_id) {
        $results = $this->getDeletedContacts($user_id);
        return $results;
    }

    public function count($user_id) {
        $results = $this->countContacts($user_id);
        return $results;
    }
}