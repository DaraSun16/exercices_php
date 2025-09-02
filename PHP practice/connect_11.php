<?php

// environment consts
$host = "localhost";
$dbname = "pdo_crud";
$username = "root";
$password = "";

// data source name
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

// connect to database
try {
  $db = new PDO($dsn, $username, $password);
  echo "We are logged in";

  // We make sure to send datas in UTF8
  $db->exec("SET NAMES utf8");

  // We define fetch by default
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 } catch (PDOException $e) {
  die("Erreur:".$e->getMessage());
}

// Gets users lists
$sql = "SELECT * FROM 'users";

// execute the request
$request = $db->query($sql);

//Get the data (fetch or fetchAll)
$user = $request->fetchAll();

// Add a user
$sql ="INSERT INTO `users`(`email`, `password`, `roles`) VALUES (`lol.@lol.fr`, 'azerty', '[\ROLE_USER\"]')";
$request = $db->query($sql);

// Modify an user
$sql = "UPDATE `users` SET `password` = '123' WHERE `id` = 3";
$request = $db->query($sql);

// delete a user
$sql = "DELETE FROM `users` WHERE `id` > 3";
$request = $db->query($sql);

// know how many lines got deleted
echo $request->rowCount();
