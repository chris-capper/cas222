<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=christ26_ace_in_the_hole', 'christ26_ace_user', 'myP4ssw0r');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}
?>
