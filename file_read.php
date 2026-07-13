<!-- model qno 19 -->
 <!-- displaying a vowel letters from example.txt  -->

 <?php
// Open the file in read mode
$file = fopen("example.txt", "r");
if ($file) {
    // read the contents of the file
    $contents = fread($file, filesize("example.txt"));
    fclose($file);

    // displaying all the contents of the file -> eti matra pani sodhxa hai exam ma
    echo "Contents of the file: " . $contents . "<br>";

    // Extract vowels only
    $vowelsOnly = preg_replace("/[^aeiouAEIOU]/", "", $contents);
        // Display result
    echo "Vowels in file: " . $vowelsOnly;
} else {
    echo "Unable to open file.";
}
?>

