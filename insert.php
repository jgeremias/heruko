<?php
// read json file
$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);

// add data
$json_arr[] = array('name'=>'Jhonatan', 'occupation'=>'Jeff Darwin', 'country'=>'Brasil');

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));
?>