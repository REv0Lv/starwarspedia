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

$requete = "SELECT * FROM species";
$resultat = $connexion->query($requete);

print "<table class='table table-striped'><tr><th></th><th>Les informations sur les espèces de Star Wars</th>";
while($ligne = $resultat->fetch_assoc()) {

    print "<tr>
      <td>".$ligne["name"]."</td>
      <td>".$ligne["average_height"]."</td>
      <td>".$ligne["average_lifespan"]."</td>
      <td>".$ligne["classification"]."</td>
      <td>".$ligne["designation"]."</td>
      <td>".$ligne["eye_colors"]."</td>
      <td>".$ligne["hair_colors"]."</td>
      <td>".$ligne["homeworld"]."</td>
      <td>".$ligne["language"]."</td>
      <td>".$ligne["skin_colors"]."</td>
    </tr>";
}
?>