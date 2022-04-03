<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>3. Write a PHP script to check whether accepted number is prime or not. </p>
    <form method="post">
        Enter a number
        <input type="number" name="num" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php
function check_prime($num)
{
    if ($num == 1) {
        echo "It is a non-prime number";
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            echo "It is a non-prime number";
            return false;
        }
    }
    echo "It is a prime number";
    return true;
}
if (isset($_POST["submit"])) {
    $n = $_POST["num"];
    check_prime($n);
}
?>