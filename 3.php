<a href="index.php">Home</a>
<?php
echo "<br>";

session_start();

$_SESSION['name'] = "nour";

// isset($_SESSION['views']) ? ($_SESSION['views'] < 100 ? $_SESSION['views']++ : null) : $_SESSION['views'] = 1;

/*
if (isset($_SESSION['views'])) {
    $_SESSION['views'] < 100 ? $_SESSION['views']++ : null;
} else {
    $_SESSION['views'] = 1;
}
*/

if (isset($_SESSION['views'])) {

    if ($_SESSION['views'] < 100) {
        $_SESSION['views']++;
    } else {
        null;
    }

} else {
    $_SESSION['views'] = 1;
}

echo "Hello " . $_SESSION['name'] . " you are  " . $_SESSION['views'] . "% lifeless" . "<br>";


?>