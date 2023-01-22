<?php
include("scripts/register_operations.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gymapp/style/register_style.css">
    <title>Log In</title>
  </head>
<body>
  <div class="container">
      <form method="post">
          <div class="data"> 
              <div class="info">
                  <label for="">Id</label>
                  <input type="text" id ="id" name="id"required>
              </div>
              <div class="info">
                  <label for="">Nombre</label>
                  <input type="text" name="name" required>
              </div>
              <div class="info">
                  <label for="">Apellido</label>
                  <input type="text" name="surname" required>
              </div>
              <div class="info">
                  <label for="">Usuario</label>
                  <input type="text" name="user" required>
              </div>
              <div class="info">
                  <label for="">Contraseña</label>
                  <input type="password" name="password" required>
              </div>
              <div class="info">
                  <label for="">Repetir contraseña</label>
                  <input type="password" name="password2"required>
              </div>
              <button name="register" >Registrar</button>
          </div>
      </form>
  </div>
</body>
</html>