<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="number" name="num" />
        <input type="submit" name="submit" />
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $n = $_POST['num'];
    if ($n > 30) echo "Greater than 30";
    elseif ($n > 20) echo "Greater than 20";
    elseif ($n > 10) echo "Greater than 10";
}
?>