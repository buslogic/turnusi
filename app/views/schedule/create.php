<!-- app/views/schedule/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Novi Raspored</title>
</head>
<body>
<h1>Dodaj Novi Raspored</h1>
<form action="/schedule/store" method="post">
    <label for="driver_id">Vozač:</label>
    <select name="driver_id" id="driver_id">
        <?php foreach($data['drivers'] as $driver): ?>
            <option value="<?php echo $driver['id']; ?>"><?php echo $driver['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="bus_id">Autobus:</label>
    <select name="bus_id" id="bus_id">
        <?php foreach($data['buses'] as $bus): ?>
            <option value="<?php echo $bus['id']; ?>"><?php echo $bus['license_plate']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="route_id">Ruta:</label>
    <select name="route_id" id="route_id">
        <?php foreach($data['routes'] as $route): ?>
            <option value="<?php echo $route['id']; ?>"><?php echo $route['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="departure_time">Vreme Polaska:</label>
    <input type="datetime-local" name="departure_time" id="departure_time">

    <label for="arrival_time">Vreme Dolaska:</label>
    <input type="datetime-local" name="arrival_time" id="arrival_time">

    <button type="submit">Sačuvaj</button>
</form>
</body>
</html>