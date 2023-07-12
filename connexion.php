<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "reseausocial";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $content = $_POST["content"];
    $media = $_POST["media"];
    $date = $_POST["date"];

    // Échapper les caractères spéciaux pour éviter les injections SQL
    $content = $conn->real_escape_string($content);
    $media = $conn->real_escape_string($media);
    $date = $conn->real_escape_string($date);

    // Requête SQL d'insertion
    $sql = "INSERT INTO posts (content, media, date) VALUES ('$content', '$media', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Post ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du post: " . $conn->error;
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
