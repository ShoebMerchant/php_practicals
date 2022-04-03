<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>SET A</h3>
    <p>1. Write a PHP script to accept the number from user and Write a php function to
        calculate the factorial of a number (a non-negative integer). The function accepts
        the number as an argument.
    </p>
    <hr />
    <form method="post">
        <input type="number" name="num" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php

function factorial($n)
{
    $f = 1;
    if ($n <= 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }
    for ($i = 1; $i <= $n; $i++) {
        $f *= $i;
    }
    return $f;
}

if (isset($_POST['submit'])) {
    $n = $_POST['num'];
    echo "<br/>" . factorial($n);
}
?>