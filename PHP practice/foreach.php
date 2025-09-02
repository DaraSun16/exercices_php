<?php

$clients = [
  "ref1" => [
    "nom" => "Gambier",
    "prenom" => "Benoit"
  ],
  "ref2" => [
    "nom" => "cesar",
    "prenom" => "Jules"
  ]
  ];

// for ($nombre = 100; $nombre < sizeof($clients); $nombre -5) {
//   echo "<p>{$clients[$nombre]}<p>";
// }

foreach($clients as $ref => $client) {
  echo "<p>{$client["prenom"]} {$client["nom"]}<p>";
}