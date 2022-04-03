<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SET B-2</title>
</head>

<body>
    <p>2. Write a PHP script to check number 153 is Armstrong or not.</p>
    <?php
    // Iterative function to
    // reverse digits of num
    function reverseDigits($num)
    {
        $rev_num = 0;
        while ($num > 1) {
            $rev_num = $rev_num * 10 + (int) $num % 10;
            $num = (int)$num / 10;
        }
        return $rev_num;
    }

    function armstrong_number($num)
    {
        $num_flag = $num;
        $sum = 0;
        while ($num > 0) {
            $rem = (int)$num % 10;
            $sum += pow($rem, 3);
            $num = (int)$num / 10;
        }
        if ($sum === $num_flag) {
            return 'True';
        } else {
            return 'False';
        }
    }
    echo "Is 153 Armstrong number? " . armstrong_number(153);
    "\n";
    ?>
</body>

</html>