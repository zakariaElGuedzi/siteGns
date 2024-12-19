<?php
$user = 'root';
$password = '';
$host = 'localhost';
$dbname = 'bdgeniuscp';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if (isset($_GET['submit'])) {
    $nom_complet = $_GET['nom_complet'] ?? '';
    $ntelephone = $_GET['ntelephone'] ?? '';
    $ville = $_GET['ville'] ?? '';
    $option_formation = $_GET['option_formation'] ?? '';

    try {
        // No need to include 'id' in the column list
        $query = $db->prepare("INSERT INTO formweb (nom_complet, ntelephone, ville, option_formation) 
                                VALUES (:nom_complet, :ntelephone, :ville, :option_formation)");
        $query->bindParam(':nom_complet', $nom_complet);
        $query->bindParam(':ntelephone', $ntelephone);
        $query->bindParam(':ville', $ville);
        $query->bindParam(':option_formation', $option_formation);

        if ($query->execute()) {
            echo "<script>alert('Data inserted successfully');</script>";
            // header("Location : thankyoupage.php");
            exit();
        } else {
            $errorInfo = $query->errorInfo();
            echo "<script>alert('Error inserting data: " . htmlspecialchars(json_encode($errorInfo)) . "');</script>";
        }
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}


// $nom_complet = isset($_GET['nom_complet']) ? $_GET['nom_complet'] : '';
// $ntelephone = isset($_GET['ntelephone']) ? $_GET['ntelephone'] : '';
// $ville = isset($_GET['ville']) ? $_GET['ville'] : '';
// $option_formation = isset($_GET['option_formation']) ? $_GET['option_formation'] : '';

// // Debug: Print received data
// echo "Nom complet: $nom_complet<br>";
// echo "Numéro de téléphone: $ntelephone<br>";
// echo "Ville de résidence: $ville<br>";
// echo "Formation souhaitée: $option_formation<br>";


// if (empty($nom_complet) || empty($ntelephone) || empty($ville) || empty($option_formation)) {
//     die("All fields are required!");
// }
// if (!is_numeric($ntelephone)) {
//     die("Phone number must be numeric!");
// }


?>


