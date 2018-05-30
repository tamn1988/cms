<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'cms';

$connection = new mysqli($server, $username, $password, $dbName);

if ($connection->connect_error){
    die('connection failed: ' . $connection->connect_error);
}

function queryGenerator($query){
    global $connection;
    return $connection->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>