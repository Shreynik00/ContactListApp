<?php
include 'remove.view.php';
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
   

   $queryy = "DELETE FROM contact  WHERE name ='$name'";


$statement = $pdo->prepare($queryy);

$statement->execute();
header('Location: contacts.php');


exit;
}
include 'views.list.php';
?>