<?php
//$GLOBALS['result[]'];
$doc = getopt("file:");
var_dump($doc);
//if($doc = fopen("D:/Web/interview-project-1-master-6cbb7fd58dfcffa7ddc4cb2181bab74be166e50f/examples/products_comma_separated.csv", 'r')) {
    $col = fgetcsv($doc);

    while($row = fgetcsv($doc)) {
        global $result;
        $result[] = (object)array_combine($col, $row);

    }
    echo'<pre>';
    print_r($result);
    echo'</pre>';
    /*$fp = fopen('persons.csv', 'w');
    foreach ($result as $fields) {
        print_r($fields);
        //fputcsv($fp, $fields);
    }
    fclose($fp);*/
//}
//else
    //echo "The file couldn't be opened!";
?>