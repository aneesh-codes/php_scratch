<!-- finding the max numbers from num.txt file -->
 <?php
 $file = fopen("num.txt", "r");

 if($file){
    $contents = fread($file, filesize("num.txt"));
    fclose($file);

    // Split the contents into an array of numbers
    $array = explode(" ", $contents); 
    // Find the maximum number
    $max = max($array);
    echo "The maximum number is: " . $max;

 }