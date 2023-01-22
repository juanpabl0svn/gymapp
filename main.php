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
                if($message != "No hay citas"){echo "<button>Check QR code</button>";}
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
    </div>

</body>
</html>