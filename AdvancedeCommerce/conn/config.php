<?php

//session_start();
$server = "sql9.freemysqlhosting.net:3306";
$username = "sql9590009";
$password = "LhwQhBXkgy";
$dbname = "sql9590009";

// Create connection
try{
   $pdo = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}


