<!-- putting the associative array in a table and using loop to display the data in the table. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1> 
        Associative Array and Loop Example
    </h1>

    <?php
    // associative array
        $marks = [
            ['name' => 'Ranju', 'roll' => 23, 'OS' => 60, 'Web-II' => 78, 'CA' => 80],
            ['name' => 'Sanju', 'roll' => 24, 'OS' => 30, 'Web-II' => 88, 'CA' => 90],
            ['name' => 'Manju', 'roll' => 34, 'OS' => 80, 'Web-II' => 98, 'CA' => 100],
            ['name' => 'Sonju', 'roll' => 44, 'OS' => 50, 'Web-II' => 68, 'CA' => 70],
            ['name' => 'Monju', 'roll' => 54, 'OS' => 20, 'Web-II' => 58, 'CA' => 60],
        ];
    ?>

    <!-- table -->
     <table border = "1">
        <tr>
            <th> Name </th>
            <th> Roll </th>
            <th> OS </th>
            <th> Web-II </th>
            <th> CA </th>
            <th> Total </th>
            <th> Remarks </th>
        </tr>
        
        <?php
            foreach($marks as $mark){

            if ($mark['OS'] >= 40 && $mark['Web-II'] >= 40 && $mark['CA'] >= 40) {
                $result = 'Pass';
            } else {
                $result = 'Fail';
        }
                echo "<tr>";
                echo "<td>" . $mark['name'] . "</td>";
                echo "<td>" . $mark['roll'] . "</td>";
                echo "<td>" . $mark['OS'] . "</td>";
                echo "<td>" . $mark['Web-II'] . "</td>";
                echo "<td>" . $mark['CA'] . "</td>";
                // calculate total
                $total = $mark['OS'] + $mark['Web-II'] + $mark['CA'];
                echo "<td>" . $total . "</td>";
                echo "<td>" . $result . "</td>";
                echo "</tr>";
            }