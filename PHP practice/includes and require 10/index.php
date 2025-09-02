<?php
// We include the function file
require_once "function.php";

// We define a title
  $titre = "Accueil";

  //We include the header
  include "header.php";

  //We include the navbar
  include_once "navbar.php";

  //We write the page content
?>

<p>Contenu de la page d'accueil</p>

<?php
verif();
  // We include the footer
  include "footer.php";
  