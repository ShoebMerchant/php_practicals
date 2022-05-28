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
    $que = array(54, 85, 24, 95);
    array_unshift($que, 25);
    array_unshift($que, 29);
    print_r($que);
    echo "<br/>";
    array_shift($que);
    print_r($que);
    ?>
</body>

</html>