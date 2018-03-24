<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Sign-Up</title>
    <meta charset="utf-8">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="../css/student_signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!--Jquery Library-->
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <!--Jquery Validation Plugin-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <!--Validation Script-->
    <script src="../js/student_registration_val.js"></script>
</head>

<body>

<!-- Header -->
<?php
require_once 'header.php'
?>
<!-- End Header -->

<!-- Sign-up Section -->
<div class="container">
    <h2>Registration</h2>
    <!-- TODO: Add action to the form. -->
    <form class="register-form" method="POST" action="" name="registration" id="signup-form">

        <label for="firstname">First Name</label>
        <input type="text" name="firstname" class="input-field" id="firstname" placeholder="John"/>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" class="input-field" id="lastname" placeholder="Doe"/>

        <label for="password">Password</label>
        <input type="password" name="password" class="input-field" id="password"/>

        <label for="email">Email Address</label>
        <input  type="email" name="email" class="input-field" id="email" placeholder="John@doe.com"/>

        <button type="submit">Register</button>

    </form>
</div>
<!-- End Sign-up Section -->

</body>
</html>