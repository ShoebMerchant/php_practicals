<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
$all_lines = file('https://www.w3resource.com/');
foreach ($all_lines as $line_num => $line) {
    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
}
?>