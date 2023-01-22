<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gymapp/style/main_style.css">
    <title>Main</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.jpg" alt="">
        </div>
        <nav>
            <label><a href="">Menu</a></label>
            <label><a href="">Schedule</a></label>
            <label><a href="">Location</a></label>
            <label><a href="">Configuration</a></label>
        </nav>
    </header>
    <div class="container">
        <div class="dates">
            <div class="title">
                <h2>Bookings</h2>
            </div>
            <div class="info">
                <?php
                include("scripts/main_operations.php");
                $message = check($_SESSION["user"]);
                if ($message == "No hay citas"){echo "<p>No hay citas</p>";}
                else{
                    echo "<p>.$message[2].</p>";
                }
                ?>
            </div>
            <?php
                if($message != "No hay citas"){echo "<button name='qr_code'>Check QR code</button>";}
            ?>
        </div>
        <div class="username">
            <?php
            if(empty($_SESSION["name"])){
                header("Location: http://localhost/gymapp/index.php");
            }else{
                echo "Welcome, ".$_SESSION["name"]." ".$_SESSION["surname"];
            }
            ?>
        </div>
        <div class="bookings">
            <div class="title_bookings">
            <h2>Reserve</h2>
            </div>
            <form action="">
                <button>08:00am - 10:00am</button>
                <button>10:00am -  12:00am</button>
                <button>06:00am - 08:00am</button>
                <button>12:00pm - 02:00pm</button>                      
                <button>02:00pm - 04:00pm</button>
                <button>04:00pm - 06:00pm</button>
                <button>06:00pm - 08:00pm</button>
            </form>
        </div>
    </div>
</body>
</html>