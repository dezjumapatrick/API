<?php

//Open our CSV file using the fopen function.
$fh = fopen("dataset.csv", "r");

//Setup a PHP array to hold our CSV rows.
$csvData = array();

//Loop through the rows in our CSV file and add them to
//the PHP array that we created above.
while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
    $csvData[] = $row;
}

//Finally, encode our array into a JSON string format so that we can print it out.
echo json_encode($csvData); ?>
