<?php
$students = [
    ['id' => 1, 'name' => 'Arpana', 'roll' => 3, 'DBMS' => 45, 'SE' => 24, 'OS' => 56, 'SL' => 28, 'NM' => 50],
    ['id' => 2, 'name' => 'Amylee', 'roll' => 4, 'DBMS' => 65, 'SE' => 58, 'OS' => 68, 'SL' => 70, 'NM' => 57],
    ['id' => 3, 'name' => 'Sonu', 'roll' => 5, 'DBMS' => 75, 'SE' => 68, 'OS' => 78, 'SL' => 80, 'NM' => 67],
    ['id' => 4, 'name' => 'Shaily', 'roll' => 1, 'DBMS' => 95, 'SE' => 88, 'OS' => 97, 'SL' => 98, 'NM' => 92],
];

echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>DBMS</th>
        <th>SE</th>
        <th>OS</th>
        <th>SL</th>
        <th>NM</th>
        <th>Total</th>
    </tr>";

foreach ($students as $index => $student) {
    $total = $student['DBMS'] + $student['SE'] + $student['OS'] + $student['SL'] + $student['NM'];
    $rowColor = $index % 2 == 0 ? '#d3ffd3' : '#ffcccc'; 
    echo "<tr style='background-color: $rowColor;'>
            <td>{$student['id']}</td>
            <td>{$student['name']}</td>
            <td>{$student['roll']}</td>
            <td>{$student['DBMS']}</td>
            <td>{$student['SE']}</td>
            <td>{$student['OS']}</td>
            <td>{$student['SL']}</td>
            <td>{$student['NM']}</td>
            <td>$total</td>
        </tr>";
}
echo "</table>";
?>
