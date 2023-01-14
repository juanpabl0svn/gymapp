<?php

include("./scripts/db.php");

if (isset($_POST['register'])) {

    if (register()){
        header("Location: http://localhost/gymapp/index.php");
    }
}

function register(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $user = $_POST['user'];
    $password  = $_POST['password'];
    $password2  = $_POST['password2'];
    if (exists($id,$user)){
        // echo "user already exists";
        return;
    }
    if (!equals($password,$password2)){
        // echo "Passwords are not equal";
        return;
    }
    $query  = "INSERT INTO usuarios (`ID`, `Nombre`, `Apellido`, `Usuario`, `Contraseña`) VALUES ('$id','$name','$surname','$user','$password')";
    $insert = mysqli_query($GLOBALS["conn"],$query);
    if ($insert){
        // echo "Successfully inserted";
        return true;
    }
}

function exists($id,$user){
    $query = "SELECT * FROM usuarios where id = '$id' or usuario = '$user' ";
    $result = mysqli_query($GLOBALS["conn"],$query);
    return mysqli_num_rows($result) > 0;
}

function equals($password, $password2){
    return $password == $password2;
}

?> 