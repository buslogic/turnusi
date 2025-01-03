<!DOCTYPE html>
<html>
<head>
    <title>Autobuski Prevoznik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="index.php?url=stajalista">Stajališta</a>
        <!-- Dodajte druge meni opcije ovde -->
    </div>

    <div class="content">
        <?php
        // Uključite odgovarajući sadržaj na osnovu URL-a
        if (isset($_GET['url']) && $_GET['url'] == 'stajalista') {
            require 'app/views/stajalista.php';
        } else {
            echo '<h1>Dobrodošli na početnu stranicu</h1>';
        }
        ?>
    </div>
</body>
</html>