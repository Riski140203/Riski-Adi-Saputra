<?php
// Define the number of rows and columns
$rows = 15;
$columns = 5;

echo "<table border='1'>";

// Create the table header
echo "<tr>";
for ($col = 1; $col <= $columns; $col++) {
    echo "<th>Kolom $col</th>";
}
echo "</tr>";

// Loop through the rows
for ($row = 1; $row <= $rows; $row++) {
    echo "<tr>";
    // Loop through the columns
    for ($col = 1; $col <= $columns; $col++) {
        echo "<td>Baris $row Kolom $col</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>