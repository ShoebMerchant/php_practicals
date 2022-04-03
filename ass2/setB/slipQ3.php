<?php
$no1 = $_GET['no1'];
$no2 = $_GET['no2'];
$cal = $_GET['cal'];

if ($cal == 1) {
    $add = $no1 + $no2;
    echo "<h1>addition = " . $add . "</h1>";
} else if ($cal == 2) {
    $sub = $no1 - $no2;
    echo "<h1>subtraction = " . $sub . "</h1>";
} else if ($cal == 3) {
    $mult = $no1 * $no2;
    echo "<h1>multiplication = " . $mult . "</h1>";
} else if ($cal == 4) {
    $div = $no1 / $no2;
    echo "<h1>division = " . $div . "</h1>";
}
