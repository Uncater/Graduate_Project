<?php

 $handler = fopen("temp/csv_new.csv" , "w");
 $urls = $_POST['url'];
$headers = $_POST['H1'];
$result = $urls . PHP_EOL . $headers;
if(fwrite($handler, $result))
    echo "File is created successfully";
else echo "Something went terribly wrong";
fclose($handler);
