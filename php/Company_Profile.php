<?php session_start(); ?>
<!--Public Profile Page-->
<!DOCTYPE html>
<html>
  <head>
    <title>Company Profile</title>
  </head>
  <body>
    <fieldset id="Name">
      <h1><?php echo $_SESSION['result']['name']?></h1>
    </fieldset>
    <fieldset id="Info">
      <h3>Who We Are</h3>
      <h3>What We Do</h3>
      <h3>Mission Statement</h3>
    </fieldset>
    <fieldset id="Project_List">
      <ul>
        <li>Project One</li>
        <li>Project Two</li>
        <li>Project Three</li>
      </ul>
    </fieldset>
    <fieldset id="Past_Projects">
      <h2>Infinite Project List</h2>
    </fieldset>
  </body>
</html>
