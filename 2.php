<a href="index.php">Home</a>
<br>
<?php
$time0 = mktime(0 , 0 , 0 , 1 , 1 , 2008);
$now = time();
$se = $now - $time0;
echo $se . "<br>";
echo round($se /60) . "<br>";
echo round($se /60 /60) . "<br>";
echo round($se /60 /60 /24) . "<br>";
echo round($se /60 /60 /24 /365) . "<br>";
?>