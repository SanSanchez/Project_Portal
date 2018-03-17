<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Sign-Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Header -->
<?php
    require_once 'header.php'
?>

<!-- Sign-up Section -->
<div class="login-page">

  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>

      <button>create</button>
    </form>

    <form class="login-form" method="POST" action="../php/route.php?type=student">
      <input type="text" name="email" placeholder="email"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="submit" class="submit" name="login" value="Login">
      <input type="submit" class="submit" name="newacct" value="Sign-up">
    </form>

  </div>
</div>
<!-- End Sign-up Section -->

</body>
</html>



