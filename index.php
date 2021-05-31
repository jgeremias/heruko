<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<table>
    <tbody>
        <tr>
            <th>Name</th>
            <th>Occupation</th>
            <th>Country</th>
        </tr>
        <?php foreach ($users as $user) { ?>
        <tr>
            <td> <?= $user->name; ?> </td>
            <td> <?= $user->occupation; ?> </td>
            <td> <?= $user->country; ?> </td>
        </tr>
        <?php } ?>
		<a href="cadastrar.php">cadastrar</a>
		<a href="remover.php">excluir</a>
		<a href="atualizar.php">atualizar</a>
    </tbody>
</table>
</html>