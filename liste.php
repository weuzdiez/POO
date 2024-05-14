<?php
include 'apprenant.php';

$apprenant = new Apprenant();
$listeapprenant = $apprenant->getListeApprenant();

echo "<h2>Liste des apprenant :</h2>";
echo "<table border='1'>";
echo "<tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Action</th>
    </tr>";
foreach ($listeapprenant as $apprenant) {
    echo "<tr>";
    echo "<td>".$apprenant["id"]."</td>";
    echo "<td>".$apprenant["nom"]."</td>";
    echo "<td>".$apprenant["prenom"]."</td>";
    echo "<td>".$apprenant["email"]."</td>";
    echo "<td>".$apprenant["tel"]."</td>";
    echo "<td><a href='supprimer.php?id=".$apprenant["id"]."'> Supprimer</a> | <a href='modifier.php?id=".$apprenant["id"]."'>Modifier</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><a href='insertion.php'>Ajouter</a>";
?>