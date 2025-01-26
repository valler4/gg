<?php
$a = "kg";
$b = 100000;
$d = "@gmail.com";
$excludedDigits = array(8, 6, 1, 0);
$uniqueEmails = array();

while ($b <= 999999) {
  $email = "$a$b$d";
  $isValid = true;

  $emailDigits = array();
  foreach (str_split($b) as $digit) {
    if (!in_array($digit, $emailDigits)) {
      $emailDigits[] = $digit;
    } else {
      $isValid = false;
      break;
    }
  }
 
  

  if ($isValid) {
    $hasDigits = true;
    foreach (array(3, 4) as $digit) {
      if (!in_array($digit, $emailDigits)) {
        $hasDigits = false;
        break;
      }
    }
    if ($hasDigits) {
      if ($emailDigits[0] == 3 && $emailDigits[1] == 4) {
        foreach ($excludedDigits as $digit) {
          if (strpos($email, (string)$digit) !== false) {
            $isValid = false;
            break;
          }
        }
        if ($isValid) {
          $uniqueEmails[] = $email;
        }
      }
    }
  }

  $b++;
}

foreach ($uniqueEmails as $email) {
  echo "$email" . "<br>";
}
echo "<hr>";
?>
<?php
$filename = "h.php";
$text = file_get_contents($filename);
$lines = explode("\n", $text);

foreach ($lines as $line) {
    echo $line . "<br>";
}
?>