<?php
// app/models/Route.php

class Route extends Model {
    public function getAll() {
        $query = 'SELECT * FROM routes';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>