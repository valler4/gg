<?php
  date_default_timezone_set("Africa/Cairo");

  $reg = date_create("2008-01-01");

echo '<pre>';
print_r(getdate());
echo '<pre>';

echo time(). "<br>";

echo time() / 60 . "<br>";
echo time() / 60 / 60 . "<br>";
echo time() / 60 / 60 / 24 . "<br>";
echo time() / 60 / 60 / 24 / 365 . "<br>";
?>