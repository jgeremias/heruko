<?php
// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['name'] == 'Jhonatan') {
        $json_arr[$key]['occupation'] = "Professor";
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));
?>