<?php
include 'apprenant.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $apprenant = new apprenant();
    if ($apprenant->insererApprenant($nom, $prenom,$email,$tel)) {
        header("Location: liste.php"); 
        exit();
    } else {
        echo "Erreur lors de l'ajout du apprenant.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issertion</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <label for="">Nom </label>
        <input type="text" name="nom"><br>
        <label for="">Prenom </label>
        <input type="text" name="prenom"><br>
        <label for="">Email </label>
        <input type="text" name="email"><br>
        <label for="">Tel </label>
        <input type="text" name="tel"><br>

        <input type="submit" value="Ajouter">
    </form>
    
</body>
</html>