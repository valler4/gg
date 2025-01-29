<a href="2.php">2</a>
<?php
  date_default_timezone_set("Africa/Cairo");

  $reg = date_create();

echo '<pre>';
print_r(getdate());
echo '<pre>';

echo time(). "<br>";

echo time() / 60 . "<br>";
echo time() / 60 / 60 . "<br>";
echo time() / 60 / 60 / 24 . "<br>";
echo time() / 60 / 60 / 24 / 365 . "<br>";

setcookie("name", "value" , time() + 60 * 60 * 24 * 30);
setcookie("nam1e", "valu5e" , strtotime("+1 month"));

echo '<pre>';
print_r($_COOKIE);
echo '<pre>';
?>