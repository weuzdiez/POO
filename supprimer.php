<?php
    include 'apprenant.php';


    if(isset($_GET['id'])) {
        $formateur = new apprenant();
        $id = $_GET['id'];

        if ($formateur->supprimerApprenant($id)) {
            echo "Formateur supprimé avec succès.";
            header("Location: liste.php"); 
        } else {
            echo "Erreur lors de la suppression du formateur.";
            header("Location: liste.php"); 
        }
    } else {
        echo "Identifiant du formateur non spécifié.";
    }
    echo "<br><a href='liste.php'>Retour</a>";     
?>