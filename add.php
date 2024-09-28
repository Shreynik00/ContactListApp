<?php
include 'add.view.php';
try{


$pdo = new PDO(dsn:'mysql:host=localhost;dbname=contacts',username:'root',password:'123456');
}
catch(PDOException $e)
{
    echo $e->getMessage();
    exit;
}
if(!empty($_POST)){ 
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];

$query = "INSERT INTO contact SET name='$name',phone = '$phone', email='$duedate'";

$statement = $pdo->prepare($query);

$statement->execute();
header('Location: contacts.php');


exit;
}


?>