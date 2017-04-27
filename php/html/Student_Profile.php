<?php session_start(); ?>
<!--Public Profile Page-->
<!DOCTYPE html>
<html>
  <head>
    <title>Student Profile</title>
  </head>
  <body>
    <fieldset id="Pers_Imm">
      <h1><?php echo $_SESSION['result']['name']?></h1>
    </fieldset>

    <fieldset id="Pers_Ext">
      <h3>Email: <?php echo $_SESSION['result']['email']?></h3>
    </fieldset>

    <fieldset id="Resume">
      <ul>
        <li><?php echo $_SESSION['result']['resume']?></li> 
      </ul>
    </fieldset>
<!--
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
-->
  </body>
</html>
