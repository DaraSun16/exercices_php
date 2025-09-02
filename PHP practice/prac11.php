<?php

$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
  $db = new PDO($dsn, $username, $password);
  echo "we are logged in";

  $db->exec("SET NAMES utf8");

  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Erreur:".$e->getMessage());
}

$users = "SELECT * FROM users WHERE 'username' =>:username AND 'password'=:password";
$request = $db->prepare($users);


$request->bindParam(":username", $username, PDO::PARAM_STR);
$request->bindParam(":password", $password, PDO::PARAM_STR);

$request->execute();
$user = $request->fetchAll();