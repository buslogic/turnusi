<?php
// app/controllers/ScheduleController.php

class ScheduleController extends Controller {
    public function index() {
        $scheduleModel = $this->model('Schedule');
        $data = $scheduleModel->getAll();
        $this->view('schedule/index', $data);
    }

    public function create() {
        $driverModel = $this->model('Driver');
        $busModel = $this->model('Bus');
        $routeModel = $this->model('Route');

        $drivers = $driverModel->getAll();
        $buses = $busModel->getAll();
        $routes = $routeModel->getAll();

        $this->view('schedule/create', ['drivers' => $drivers, 'buses' => $buses, 'routes' => $routes]);
    }

    public function store() {
        // Preuzmi podatke iz POST zahteva
        $driver_id = $_POST['driver_id'];
        $bus_id = $_POST['bus_id'];
        $route_id = $_POST['route_id'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];

        // Kreiraj novi raspored
        $scheduleModel = $this->model('Schedule');
        $scheduleModel->create($driver_id, $bus_id, $route_id, $departure_time, $arrival_time);

        // Preusmeri nazad na indeks stranicu rasporeda
        header('Location: /turnusi/public/schedule/index');
    }
}
?>