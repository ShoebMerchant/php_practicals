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
    $time_table = array(
        //     Mon    Tue    Wed    Thu    Fri    Sat 
        array('   ', '   ', 'CPP', '   ', '   ', 'PP '),
        array('CPP', 'WT ', 'PP ', 'SE ', 'SE ', 'SE '),
        array('WT ', 'CPP', 'SE ', 'CPP', 'WT ', 'WT '),
    );
    // foreach ($time_table as $arr) {
    //     print_r($arr);
    //     echo "<br/>";
    // }
    ?>
    <form method="post">
        <input type="number" name="array_idx" placeholder="Enter array index" />
        <input type="number" name="el_idx" placeholder="Enter element index" />
        <input type="submit" name="submit" />
    </form>
    <?php
    function display_multi_dimensional_array($mul_dim_array)
    {
        foreach ($mul_dim_array as $arr) {
            foreach ($arr as $el) {
                if ($el !== "   ")
                    echo $el . " ";
                else echo "&nbsp&nbsp&nbsp&nbsp";
            }
            echo "<br />";
        }
        echo "<br />";
    }

    $time_table = array(
        //     Mon    Tue    Wed    Thu    Fri    Sat 
        array('   ', '   ', 'CPP', '   ', '   ', 'PP '),
        array('CPP', 'WT ', 'PP ', 'SE ', 'SE ', 'SE '),
        array('WT ', 'CPP', 'SE ', 'CPP', 'WT ', 'WT '),
    );

    if (isset($_POST['submit'])) {
        $arr_idx = $_POST['array_idx'];
        $el_idx = $_POST['el_idx'];
        echo $time_table[0][2];
        echo "<br />";
        display_multi_dimensional_array($time_table);
        array_splice($time_table[$arr_idx], $el_idx, 1);
        display_multi_dimensional_array($time_table);
    }
    ?>

</body>

</html>