<!-- app/views/schedule/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raspored Vožnji</title>
</head>
<body>
<h1>Raspored Vožnji</h1>
<table>
    <thead>
    <tr>
        <th>Vozač</th>
        <th>Autobus</th>
        <th>Ruta</th>
        <th>Vreme Polaska</th>
        <th>Vreme Dolaska</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($data as $schedule): ?>
        <tr>
            <td><?php echo $schedule['driver_id']; ?></td>
            <td><?php echo $schedule['bus_id']; ?></td>
            <td><?php echo $schedule['route_id']; ?></td>
            <td><?php echo $schedule['departure_time']; ?></td>
            <td><?php echo $schedule['arrival_time']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a href="/schedule/create">Dodaj Novi Raspored</a>
</body>
</html>