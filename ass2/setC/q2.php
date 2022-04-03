<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <h3>SET B</h3>
    <p>
        2. Write a PHP script for the following: Design a form to accept the details of 5
        different items, such as item code, item name, units sold, rate. Display the bill in
        the tabular format. Use only 4 text boxes. (Hint : Use of explode function.)
    </p>
    <hr />
    <form method="post" action="slipQ2.php">

        <center>
            <h1>Enter details of 5 Items </h1>

            <h3>item code <input type="text" name="itemcode" placeholder="ex 11,12,13,14,15" /></h3>

            <h3>item name <input type="text" name="itemname" /></h3>

            <h3>units sold <input type="text" name="unitssold" /></h3>

            <h3>rate <input type="text" name="rate" /></h3>

            <input type="submit" value="Submit" />

        </center>

    </form>
</body>

</html>