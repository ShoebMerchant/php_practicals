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
        2. Write a PHP script to create a Class shape and its subclass triangle, square and display area of the selected shape.( use the concept of Inheritance) Display menu (use radio button) <br>
        a) Triangle <br>
        b) Square <br>
        c) Rectangle <br>
        d) Circle <br>
    </p>
    <hr />
    <form method="post">
        <input type="radio" name=op value=1>Triangle
        <input type="radio" name=op value=2>Square
        <input type="radio" name=op value=3>Rectangle
        <input type="radio" name=op value=4>Circle
        <input type="submit" name=submit>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $op = $_POST['op'];
        echo "<form action=q2Act.php method=get>";
        switch ($op) {
            case 1:
                echo "
                    <h2>Area of Triangle</h2>
                    <table>
                        <tr>
                            <td>Enter base </td>
                            <td><input type=text name=b></td>
                        </tr>
                        <tr>
                            <td>Enter Height</td>
                            <td> <input type=text name=h></td>
                        </tr>
                        <input type=hidden name=op value=1>
                    </table>
                    ";
                break;

            case 2:
                echo "
                    <h2>Area of Square</h2>
                    <table>
                        <tr>
                            <td>edge length </td>
                            <td><input type=text name=s></td>
                        </tr>
                        <input type=hidden name=op value=2>
                    </table>
                    ";
                break;

            case 3:
                echo "
                    <h2>Area of Rectangle</h2>
                    <table>
                        <tr>
                            <td>width </td>
                            <td><input type=text name=w></td>
                        </tr>
                        <tr>
                            <td>height </td>
                            <td><input type=text name=h></td>
                        </tr>
                        <input type=hidden name=op value=3>
                    </table>
                    ";
                break;

            case 4:
                echo "
                        <h2>Area of Circle</h2>
                        <table>
                            <tr>
                                <td>Radius </td>
                                <td><input type=text name=r></td>
                            </tr>
                            <input type=hidden name=op value=4>
                        </table>
                        ";
                break;
        }
        echo "
            <input type=submit value=SUBMIT>
            </form>
        ";
    }
    ?>
</body>

</html>