<?php
$itemcode = $_POST['itemcode'];
$itemname = $_POST['itemname'];
$unitssold = $_POST['unitssold'];
$rate = $_POST['rate'];

$i_code = explode(',', $itemcode);
$i_name = explode(',', $itemname);
$i_unit = explode(',', $unitssold);
$i_rate = explode(',', $rate);

$t_amt = (
    ($i_unit[0] * $i_rate[0])
    + ($i_unit[1] * $i_rate[1])
    + ($i_unit[2] * $i_rate[2])
    + ($i_unit[3] * $i_rate[3])
    + ($i_unit[4] * $i_rate[4])
);

echo "<table align=center border=1>";
echo "<tr>
        <td> <b>Item Code</b> </td>
        <td> <b>Item Name</b> </td>
        <td><b> Units Sold</b> </td>
        <td> <b>Rate </b></td>
    </tr>";

for ($i = 0; $i <= 4; $i++) {
    echo "<tr>
            <td>" . $i_code[$i] . "</td>
            <td>" . $i_name[$i] . "</td>
            <td>" . $i_unit[$i] . "</td>
            <td>" . $i_rate[$i] . "</td>
        </tr>";
}

echo "<tr><th colspan=4></th></tr>";

echo "<tr>
        <th colspan=3>Total amount </th>
        <td>" . $t_amt . "</td>
    </tr>";

echo "</table>";
