<!-- <?php
// declaring variables => $ followed by string $greeting

$greeting = 'Hello';
$name = 'Alan Chan';
// dif btw single and double quotes - single quotes won't print the variable
// interpolation
// echo "Hello, $name";

//concatenation using . notation
// echo 'Hello, ' . $name;

echo $greeting . ', ' . $name;
//👆 is the same as echo "{$greeting}, {$name}" but must include "", {} optional

?> -->
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
      <!-- htmlspecialchars() is a built-in function -->
      <h1>
        <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
      </h1>
    </header>

  </body>
</html>
