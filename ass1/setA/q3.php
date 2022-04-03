<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table {
            margin: 5px;
            border: 1px solid red;
            border-collapse: collapse;
        }

        th {
            text-align: center;
            padding: 5px;
            border: 1px solid red;
        }

        td {
            text-align: center;
            padding: 5px;
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <p>
        3. Write a PHP script to script to display time table of your class( use HTML table
        tags in echo).
    </p>
    <table class="table">
        <tr class="table">
            <?php
            $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
            foreach ($days as $day) {
                echo "<th>$day</th>";
            }
            ?>
        </tr>
        <?php
        $time_table = array(
            //     Mon    Tue    Wed    Thu    Fri    Sat 
            array('   ', '   ', 'CPP', '   ', '   ', 'PP '),
            array('CPP', 'WT ', 'PP ', 'SE ', 'SE ', 'SE '),
            array('WT ', 'CPP', 'SE ', 'CPP', 'WT ', 'WT '),
        );
        echo $time_table[0][0];
        for ($i = 0; $i <= 2; $i++) {
            echo "<tr class=\"table\">";
            for ($j = 0; $j <= 5; $j++) {
                echo "<td class=\"table\">" . $time_table[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>