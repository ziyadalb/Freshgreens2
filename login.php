<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
  
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
    </div>
    <div class="input-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>
