<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>SET B</h3>
    <p>
        3. Write a PHP script for the following: <br />
        a) Design a form to accept two numbers from the users.<br />
        b) Give option to choose an arithmetic operation (use RadioButton).<br />
        c) Display the result on next form. d) Use concept of default parameter.
    </p>
    <hr />
    <FORM ACTION="slipQ3.php" method="GET">
        <table>
            <tr>
                <td>
                    <h3>Enter first no :</h3>
                </td>
                <td><input type=text name=no1>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Enter second no :</h3>
                </td>
                <td><input type=text name=no2>
                </td>
            </tr>
            <tr>
                <td><b>Select Operation which u have to perform :</b></td>
            </tr>
            <tr>
                <td><input type=radio value="1" name=cal>Addition</td>
            </tr>
            <tr>
                <td><input type=radio value="2" name=cal>Substraction</td>
            </tr>
            <tr>
                <td><input type=radio value="3" name=cal>Multiplication</td>
            </tr>
            <tr>
                <td><input type=radio value="4" name=cal>Division</td>
            </tr>
            <tr>
                <td></td>
                <td><input type=submit name=submit value=Calculate></td>
            </tr>
        </table>
    </form>
</body>

</html>