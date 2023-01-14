<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gymapp/style/style3.css">
    <title>Main</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.jpg" alt="">
        </div>
        <nav>
            <label><a href="">Menu</a></label>
            <label><a href="">Calendar</a></label>
            <label><a href="">Location</a></label>
            <label><a href="">Configuration</a></label>
        </nav>
    </header>
    <div class="container">
        <div class="dates">
            <div class="title">
                <h2>Reservas</h2>
            </div>
            <div class="info">
                <p>02:00 pm, 18/02/2023</p>
            </div>
        </div>
        <div class="username">
            <?php
            echo "Welcome, ".$_SESSION["name"]." ".$_SESSION["surname"];
            ?>
        </div>
    </div>
    <?php
    include("scripts/main_operations.php");
    ?>
</body>
</html>