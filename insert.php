<?php

$nome = filter_input(INPUT_POST,'name',FILTER_SANITINE_STRING);
$occupation = filter_input(INPUT_POST,'occupation',FILTER_SANITINE_STRING);
$country = filter_input(INPUT_POST,'country',FILTER_SANITINE_STRING);



// read json file
$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);



// add data
$json_arr[] = array('name'=>$nome, 'occupation'=>$occupation, 'country'=>$country);

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));
?>


