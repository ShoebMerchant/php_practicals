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
    <p>3. Design a HTML form to accept a string. Write a PHP function that checks
        whether a passed string is a palindrome or not?
    </p>
    <hr />
    <form method="post">
        <input type="text" name="str" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php

function is_str_palindrome($str)
{
    if (strrev($str) === $str) {
        return;
    } else return 'not ';
}

if (isset($_POST['submit'])) {
    $s = $_POST['str'];
    echo "<br/> The string is "
        . is_str_palindrome($s) . "palindrome";
}
?>