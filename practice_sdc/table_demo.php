<!-- here we are displaying php variables in html table.  -->
<?php
// php variables
$name = "Alice";
$address = "Kathmandu";
$age = 25;

?>
// php variables into table 
<table border="1">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $age; ?></td>
    </tr>
</table>
