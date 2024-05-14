<?php
include 'Connexion.php';

class Apprenant {
    
    private $conn;

    public function __construct() {
        $connexion = new Connexion();
        $this->conn = $connexion->conn;
    }

    
    public function getListeApprenant() {
        $sql = "SELECT * FROM apprenant";
        $result = $this->conn->query($sql);

        $apprenant = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $apprenant[] = $row;
            }
        }

        return $apprenant;
    }

    public function insererApprenant($nom, $prenom,$email,$age) {
        $sql = "INSERT INTO apprenant (Nom, Prenom, Email, Tel) VALUES ('$nom', '$prenom', '$email','$tel')";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function supprimerApprenant($id) {
        $sql = "DELETE FROM apprenant WHERE id=$id";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function modifierFormateur($id, $nom, $specialite) {
        $sql = "UPDATE apprenant SET nom='$nom', specialite='$specialite' WHERE id=$id";
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

?>