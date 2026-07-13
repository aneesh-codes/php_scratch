<!-- april 2024  qno 17  -->
 <!-- writing a integers in num.txt file -->

 <?php
 $file = fopen("num.txt","w");
 if($file){
    // Write integers to the file separated by spaces
    $numbers = "11 22 33 99 55 66 77 88 49";
    fwrite($file, $numbers);

    fclose($file);
    echo "Integers written to num.txt successfully.";
 }