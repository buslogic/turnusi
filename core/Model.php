<?php
// core/Model.php

class Model {
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die('Database connection error: ' . $this->db->connect_error);
        }
    }
}
?>