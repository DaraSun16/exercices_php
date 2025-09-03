<?php
require_once "../prac11.php";

// we check if we got an id
if(!isset($_GET["id"]) || empty($_GET["id"])) {
  // I dont have an id
  header("Location: articles.php");
  exit;
}

// I take the id
$id = $_GET["id"];

// We going to get the articles from the DB
// We write the query
$sql = "SELECT * FROM `articles` WHERE `id` = :id";

// WE prepare the query
$requete = $db->prepare($sql);

// We inject the params
$requete->bindParam(":id", $id, PDO::PARAM_INT);

//we exect the request
$requete->execute();

// we take the article
$article = $requete->fetch();

// we check if article is empty
if(!$article){
  //no articles, error 404
  http_response_code(404);
  echo "articles inexistant";
  exit;
}
//we got an article here

$titre = strip_tags($articles["title"]);

include "../includes and require 10/header.php";

include_once "../includes and require 10/navbar.php";
?>

<article>
  <h1><?= strip_tags($article ["title"]) ?></h1>
  <p>Publié le <?= $article["created_at"] ?></p>
  <div><?= strip_tags($article["content"]) ?></div>
</article>

<?php

include "../includes and require 10/footer.php";