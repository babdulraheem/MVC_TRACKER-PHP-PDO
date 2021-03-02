
<?php
//will create a connection with the database

$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
$username = 'root';

//you could have a password here if you have one
//$password ='pa55word

try {
    $db = new PDO($dsn, $username);
} catch (PDOException $e){
    $error = "Database Error: ";
    $error .=$e->getMessage();
    include('view/error.php');
    exit();
}