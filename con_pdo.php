<?php
// Mynk : Always Turn OFF Error Reporting On Production
// Mynk : Establish a connection with proper eexception handling for PDO !!
$options = array(
    PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
);
try
{
    $conn = new PDO("mysql:host=localhost;dbname=login_system", "root", "",$options);
}
catch (PDOException $e) {
    die('Connection Failed !! ');
}
if(! $conn )
{
  die('Could not connect: ');
}
?>
