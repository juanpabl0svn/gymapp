<?php
include("./scripts/db.php");
session_start();
if (isset($_POST["join"])){
    $info = login();
    if (!empty($info)){
        $_SESSION["id"] = $info[0];
        $_SESSION["name"] = $info[1];
        $_SESSION["surname"] = $info[2];
        $_SESSION["user"] = $info[3];
        $_SESSION["password"] = $info[4];
        header("Location: http://localhost/gymapp/main.php");
    }
}

function login(){
    $user = $_POST["user"];
    $password = $_POST["password"];
    $result = check($user,$password);
    if (empty($result)){
        echo "Wrong username or password";
        return;
    }
    return $result;
}

function check($user,$password){
    $query = "SELECT * FROM usuarios WHERE Usuario = '$user' and contraseña = '$password'";
    $result = mysqli_query($GLOBALS["conn"],$query);
    $row = mysqli_fetch_array($result);
    return $row;
}

?>