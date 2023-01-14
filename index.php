<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gymapp/style/style.css">
    <title>UdeM</title>
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <label for="">User</label>
        <input type="email" id="user" name="user" required />
        <label for="">Password</label>
        <input type="password" id="password" name="password" required/>
        <button type="submit" name="join">Join</button>
        <a href="">¿Forgot your password?</a>
      </form>
    </div>
    <?php
    include("scripts/index_operations.php");
    ?>

  </body>
</html>
