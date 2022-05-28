<?php

$dbconn = pg_connect("host=localhost port=5432 password=admin")
    or die('Could not connect: ' . pg_last_error());

$query = 'SELECT * FROM employee';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<table>\n";

while ($temp = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($temp as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}

echo "</table>\n";

pg_free_result($result);
pg_close($dbconn);
