
<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
Occupation: <?php echo $_POST["occupation"];?><br>
Country: <?php echo $_POST["country"]; ?><br>

</body>
</html> 

<?php

$nome = $_POST['name'];
$occupation = $_POST['occupation'];
$country = $_POST['country'];

echo $nome
echo $occupation
echo $country

// read json file
$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);



// add data
$json_arr[] = array('name'=>$nome, 'occupation'=>$occupation, 'country'=>$country);

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));
?>


