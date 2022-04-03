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
    <p>2. Design a HTML form to accept a string.
        Write a php function to reverse a string.
    </p>
    <hr />
    <form method="post">
        <input type="text" name="str" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php
function rev_str($str)
{
    $l = strlen($str);
    $rev = '';
    for ($i = $l - 1; $i >= 0; $i--) {
        $rev = $rev . $str[$i];
    }
    return $rev;
}

if (isset($_POST['submit'])) {
    $s = $_POST['str'];
    echo "<br /> The reverse string is : " . rev_str($s);
}
?>