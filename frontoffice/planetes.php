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

$requete = "SELECT * FROM planets";
$resultat = $connexion->query($requete);

print "<table class='table table-striped'><tr><th></th><th>Les informations sur les planètes de Star Wars</th>";
while($ligne = $resultat->fetch_assoc()) {

    echo "<tr>
      <td>".$ligne["name"]."</td>
      <td>".$ligne["climate"]."</td>
      <td>".$ligne["diameter"]."</td>
      <td>".$ligne["gravity"]."</td>
      <td>".$ligne["orbital_period"]."</td>
      <td>".$ligne["population"]."</td>
      <td>".$ligne["rotation_period"]."</td>
      <td>".$ligne["surface_water"]."</td>
      <td>".$ligne["terrain"]."</td>
    </tr>";
    
}
?>