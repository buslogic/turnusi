<?php
// app/models/Bus.php

class Bus extends Model {
    public function getAll() {
        $query = 'SELECT * FROM buses';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>