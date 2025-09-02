<?php
// We define a title
  $titre = "includes and require 10/Accueil";

  //We include the header
  include "includes and require 10/header.php";

  //We include the navbar
  include_once "includes and require 10/navbar.php";

  //We write the page content
?>

<p>Contenu de la page d'accueil</p>
<?php

  require_once "connect_11.php";

  //HOW TO PROTECT SQL INJECTION
  $username = "demo";
  $password = "123";

  $sql = "SELECT * FROM `users` WHERE `username`=>:username AND `password`=:password";    //possible to replace :username :password with numbers like 1 and 2 but its not advised cuz you have to remember the order

  // WE prepare the query
  $request = $db->prepare($sql);

  // We inject the values "bindValue"
  $request->bindValue(":username", $username, PDO::PARAM_STR);
  $request->bindValue(":password", $password, PDO::PARAM_STR);
  
  //if we have data that can be injected before being defined or before being modify, use bindParam instead
  // $request->bindParam(":username", $username, PDO::PARAM_STR);
  //$username = "demo";

  // We execute
  $request->execute();

  $user = $request->fetchAll();


  // INJECTION SQL because of $username (its like greying out the password part with --)  can also do inject sql via password with OR 1=1 --

  // $username = "admin'; --";
  // $password = "123' OR 1=1 --";

  // $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
  // $request = $db->query($sql);
  // $user = $request->fetch();



  // We include the footer
  include "includes and require 10/footer.php";
  