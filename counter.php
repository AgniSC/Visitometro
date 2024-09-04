<?php
// Path to the text file
$file = 'counter.txt';

// Open the file to get existing count
$handle = fopen($file, 'r');
$counter = (int)fread($handle, filesize($file));
fclose($handle);

// Increment the counter value
$counter++;

// Write the new count back to the file
$handle = fopen($file, 'w');
fwrite($handle, $counter);
fclose($handle);

// Display the counter
echo "Total visitors: " . $counter;
?>
