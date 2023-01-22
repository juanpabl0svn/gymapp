<?php

include("./scripts/db.php");

function check($user){
    $info = get_bookings($user);        
    if (empty($info)){
        return "No hay citas";
    }
    if ($info[2]==date("Y-m-d")){
        return "Ya tiene reserva para hoy";
    }
    reset_bookings($user);
    return "No hay citas";
}

function reset_bookings($user){
    $query = "Delete FROM bookings WHERE user = '$user'";
    $result = mysqli_query($GLOBALS["conn"],$query);
    return;
}

function get_bookings($user) {
    $query = "SELECT * FROM bookings WHERE user = '$user'";
    $result = mysqli_query($GLOBALS["conn"],$query);
    $info = mysqli_fetch_array($result);
    return $info;
}

?>