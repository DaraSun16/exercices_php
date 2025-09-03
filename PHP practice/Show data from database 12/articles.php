<?php
// We going to get the articles from the DB
// connect to the db
require_once "../prac11.php";

// we write the query
$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";

// we exec the query
$request = $db->query ($sql);

// we take the datas
$articles = $request->fetchAll();



$titre = "../includes and require 10/Accueil";

include "../includes and require 10/header.php";

include_once "../includes and require 10/navbar.php";
?>

<h1>Liste des articles</h1>

<section>
<?php foreach($articles as $article): ?>

  <article>
    <h1><a href="article.php?id=<?= $article["id"] ?>"><?= strip_tags($article ["title"]) ?></a></h1>
    <p>Publié le <?= $article["created_at"] ?></p>
    <div><?= strip_tags($article["content"]) ?></div>
  </article>
<?php endforeach; ?>
</section>

<?php

include "../includes and require 10/footer.php";