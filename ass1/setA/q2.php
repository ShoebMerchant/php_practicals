<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>

<body>
    <p>
        2. Write a PHP script to display student information on web page.
    </p>
    <?php
    class student
    {
        public $name = 'ali';
        public $rno = 55;
    }
    $a = new student();
    echo "$a->name $a->rno";
    echo "<br>";
    $b = new student();
    echo "$b->name $b->rno";
    ?>
</body>

</html>