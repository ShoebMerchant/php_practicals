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
    <p>
        2. Write a PHP script to create a Class shape
        and its subclass triangle, square
        and display area of the selected shape.
        ( use the concept of Inheritance)
        Display menu (use radio button) <br>
        a) Triangle <br>
        b) Square <br>
        c) Rectangle <br>
        d) Circle <br>
    </p>
    <hr />
    <form method="post">
        <input type=radio name=op value=1 />Triangle
        <input type=radio name=op value=2 />Square
        <input type=radio name=op value=3 />Rectangle
        <input type=radio name=op value=4 />Circle
        <hr />
        <input type=number name=a />Height/Radius
        <hr />
        <input type=number name=b />Width/Base
        <hr />
        <input type=submit name=submit />
    </form>
    <?php
    define('pi', 3.14);
    if (isset($_POST["submit"])) {
        $op = $_POST["op"];
        $h = $_POST["a"];
        $w = $_POST["b"];
        class shape
        {
            function calc_area($h, $w)
            {
            }
        }
        class Triangle extends shape
        {
            function calc_area($h, $b)
            {
                return (1 / 2) * $h * $b;
            }
        }
        class square extends shape
        {
            function calc_area($s, $h)
            {
                return $s * $s;
            }
        }
        class rectangle extends shape
        {
            function calc_area($w, $h)
            {
                return $w * $h;
            }
        }
        class circle extends shape
        {
            function calc_area($r, $h)
            {
                return pi * $r * $r;
            }
        }
        switch ($op) {
            case "1":
                $obj = new Triangle();
                echo "Area : " . $obj->calc_area($h, $w);
        }
    }
    ?>
</body>

</html>