<?php
echo "<table border='1px solid black'>";
for($j = 1;$j<=10;$j++) {
    echo "<tr>";
    for ($i = 1; $i <= 10; $i++) {
        $z = $i * $j;
        echo "<td>$z</td>";
    }
    echo "</tr>";
}
echo "</table>";

