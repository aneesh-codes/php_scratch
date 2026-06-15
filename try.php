<!-- Calculating points from the football games  -->

<?php 
function calculatePoints($wins, $draws, $losses){
    $points = ($wins * 3) + ($draws * 1) + ($losses * 0);
    return $points;
}

// Example usage:
$wins = 10;
$draws = 5;
$losses = 3;

$total = calculatePoints($wins, $draws, $losses);
echo "Total points : $total";

?>