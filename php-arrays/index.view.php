<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Arrays</title>
  </head>
  <body>

    <ul>
      <!-- <?php foreach ($names as $name) {
        echo "<li>$name</li>";
      } ?> -->

      <!-- the above can be rewritten as below -->

      <!-- <?php foreach ($animals as $animal) : ?>

        <li><?= $animal; ?></li>

      <?php endforeach; ?> -->

      <!-- filtering through associative arrays -->

      <!-- <?php foreach ($person as $feature => $value) : ?>
        <li><strong><?= $feature; ?></strong> <?= $value; ?></li> -->

      <?php foreach ($task as $todo => $value) : ?>

        <li><strong><?= $todo ?></strong> <?= $value ?></li>

      <?php endforeach; ?>

    </ul>

  </body>
</html>
