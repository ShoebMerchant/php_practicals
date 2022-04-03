<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>SET B</h3>
    <p>
        1. Design a HTML page to accept a number
        and write a PHP script to display that
        number in words e.g. 123 - one two three
    </p>
    <hr />
    <form method="post">
        <input type="number" name="num" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php
$wordsArray = array('zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');

function display_num_in_wrds($num)
{
    global $wordsArray;
    for ($i = 0; $i < strlen($num); $i++) {
        echo $wordsArray[((int)$num[$i])] . " ";
    }
}

if (isset($_POST["submit"])) {
    $s = $_POST["num"];
    display_num_in_wrds((string)$s);
}
?>