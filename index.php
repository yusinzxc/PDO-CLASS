<?php

  include('classes/init.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php echo registered() ?>
  <?php $view = new view; 
        $view->allUsers(); 
  ?>
  <form action="" method="POST" style="width: 200px;">
    <div style="display: flex; flex-direction: column; margin:10px 0;">
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
    </div>
    <div style="display: flex; flex-direction: column; margin:10px 0;">
      <label for="password">Password</label>
      <input type="text" name="password" id="password">
    </div>
    <input type="submit" value="Register" name="register">
  </form>
</body>
</html>