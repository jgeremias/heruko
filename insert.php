<?php

$a = $_POST["name"];
$b = $_POST["occupation"];
$c = $_POST["country"]; 

echo $a;
echo $b;
echo $c;


$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);


// add data
$json_arr[] = array('name'=>$a, 'occupation'=>$b, 'country'=>$c);

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));


?>
