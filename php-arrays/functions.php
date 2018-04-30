<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function is_adult($age) {
  if ($age >= 18) {
    echo 'Come in';
  } else {
    echo 'You must be 18 or over to enter this club.';
  }
}
