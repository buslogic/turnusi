<?php
// app/models/Driver.php

class Driver extends Model {
    public function getAll() {
        $query = 'SELECT * FROM drivers';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>