<?php

// API endpoint
$apiUrl = "https://dummyjson.com/products";

// Fetch API data
$response = file_get_contents($apiUrl); //url er content gulo dhore niye ase.
$data = json_decode($response);//object a convert kore.

// var_dump($data->products);
foreach ($data->products as $key => $value) {
    echo $value->title . " <br>\n";
}

