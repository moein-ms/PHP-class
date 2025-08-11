<?php
$users = [
    [ 'name' => 'ali', 'family' => 'mousavi'],
    [ 'name' => 'reza', 'family' => 'akbary'],
    [ 'name' => 're', 'family' => 'ff']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>

        </thead>
        <tbody>
            <?php
            foreach ($users as $index => $user) {
                $index = $index+1;
                echo
                "
                <tr>
                <td>$index</td>
                <td>{$user['name']}</td>
                <td>{$user['family']}</td>
                </tr>
                ";
                
            }
            ?>
        </tbody>
    </table>
</body>
</html>