<?php
// app/models/Schedule.php

class Schedule extends Model {
    public function getAll() {
        $query = 'SELECT * FROM schedules';
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($driver_id, $bus_id, $route_id, $departure_time, $arrival_time) {
        $query = 'INSERT INTO schedules (driver_id, bus_id, route_id, departure_time, arrival_time) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iiiss', $driver_id, $bus_id, $route_id, $departure_time, $arrival_time);
        return $stmt->execute();
    }
}
?>