<?php

$nome = $_POST["name"];
$ocupacao = $_POST["occupation"];
$pais = $_POST["country"]; 

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['name'] == $nome) {
        $json_arr[$key]['occupation'] = $ocupacao;
		$json_arr[$key]['country'] = $pais;
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>