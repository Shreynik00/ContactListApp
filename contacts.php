<?php

try{


$pdo = new PDO(dsn:'mysql:host=localhost; dbname=contacts',username:'root',password:'123456');
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit;
}

$query = 'SELECT * FROM contact';

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll();
include 'index.template.php';
?>