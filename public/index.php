<?php

if (isset($_GET["p"])) {
  switch ($_GET["p"]) {
    case "accueil":
      include "../pages/accueil.php";
      break;
    case "contact":
      include "../pages/contact.php";
      break;
    case "livreOr":
      include "../pages/livre-or.php";
      break;
    default:
  }
} else {
  include "../pages/accueil.php";
}
