<!-- multidimenisional array into table -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
    <h1>
        Array and Loop Example
    </h1>
<?php
    // multidimensional array
$students = [
[23,'Ranju','info@ranju.com','4th'],
[24,'Sanju','info@sanju.com','6th'],
[34,'Manju','info@manju.com','5th'],
];

// table
echo '<table border="1">';
echo '<tr> <th>Roll</th>
<th>Name</th>
<th>Email</th>
<th>Semester</th>
</tr>';

for($i=0; $i<count($students); $i++){
    echo '<tr>';
    echo '<td>' . $students[$i][0] . '</td>';
    echo '<td>' . $students[$i][1] . '</td>';
    echo '<td>' . $students[$i][2] . '</td>';
    echo '<td>' . $students[$i][3] . '</td>';
    echo '</tr>';
}
    // echo count($students);
?>
</body>
</html>