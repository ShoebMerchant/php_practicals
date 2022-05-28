<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr = array("a" => 1, "b" => 2, "c" => 3, "d" => 4);
    print_r($arr);
    echo "<br/>";
    $arr = array_flip($arr);
    print_r($arr);
    echo "<br/>";
    shuffle($arr);
    print_r($arr);
    ?>
</body>

</html>