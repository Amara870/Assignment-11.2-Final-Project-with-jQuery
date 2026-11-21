<?php
    // build a 2d array that will be converted to JSON format
    $data = [
        ['name' => 'Sally', 'value' => 25],
        ['name' => 'Fred', 'value' => 35],
        ['name' => 'George', 'value' => 45],
        ['name' => 'Mary', 'value' => 29],
        ['name' => 'Alice', 'value' => 32],
        ['name' => 'Gary', 'value' => 39],
        ['name' => 'Melissa', 'value' => 40],
    ];

    // set the header to json format (this way the browser will treat the file properly)
    header('Content-Type: application/json');

    // convert our 2d array of data into json format
    echo json_encode($data);   
?>