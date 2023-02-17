<?php 

error_reporting(E_ERROR);
ini_set("display_errors",true);

$page = $_GET["page"];
if($page < 1) {
  $page = 1;
}
$connexion = mysqli_connect(
    "localhost", // serveur
    "root",      // login mysql sur serveur
    "root",      // mot de passe mysql
    "starwars"   // nom base de données
);

$requete = "SELECT * FROM films";
$resultat = $connexion->query($requete);

print "<table class='table table-striped'><tr><th></th><th>Les informations sur les films de Star Wars</th>";
while($ligne = $resultat->fetch_assoc()) {

    print "<tr>
      <td>".$ligne["director"]."</td>
      <td>".$ligne["episode_id"]."</td>
      <td>".$ligne["opening_crawl"]."</td>
      <td>".$ligne["producer"]."</td>
      <td>".$ligne["release_date"]."</td>
      <td>".$ligne["title"]."</td>
    </tr>";
}
?>