<?php
$subjects = array("Math", "Science", "English");
print_r($subjects);

echo '<ol type = "1">';

for($i =0; $i < count($subjects); $i++){
    echo '<li>'.$subjects[$i].'</li>';
}

echo '</ol>';

?>

<!-- now array values in table  -->
 
<table border="1">
    <tr>
        <th>Subject</th>
    </tr>
    <?php for($i = 0; $i < count($subjects); $i++): ?>
    <tr>
        <td><?php echo $subjects[$i]; ?></td>
    </tr>
    <?php endfor; ?>
</table>