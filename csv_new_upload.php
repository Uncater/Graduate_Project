<?php

switch($_FILES['csv_new']['error']) {
    case 0:
        $filedata=pathinfo(basename($_FILES['csv_new']['name']));
        $path = "temp/";
        $ext = $filedata['extension'];
        $filename="csv_new.csv";
        $result=$path . $filename;
        if($ext == 'csv')
        {copy($_FILES['csv_new']['tmp_name'], $result);
        echo "Success!"; break;}
        else {echo "File is not csv"; break;}
    case 1:
        echo "File is too big"; break;
    case 2:
        echo "File is too big"; break;
    case 3:
        echo "Something went terribly wrong! Please, try again!"; break;
    case 4:
        echo "C'mon, select your file!"; break;
}