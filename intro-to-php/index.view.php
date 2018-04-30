<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP and HTML</title>
    <style>
      header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- <h1>
        <?php
        $name = $_GET['name'];
        echo  "Hello, {$name}";
        ?>
      </h1> -->
      <!-- when you have only 1 var, the below code is cleaner; use = instead of php for a shorthand notation -->
      <!-- htmlspecialchars() is a built-in function, grabbing something from the query string -->
      <h1>
        <!-- <?= "Hello, " . htmlspecialchars($_GET['name']); ?> -->
        <?= $greeting;  ?>
      </h1>
    </header>

  </body>
</html>
