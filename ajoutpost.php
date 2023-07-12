<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reseausocial";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texte = $_POST["texte"];
    $media = $_FILES["media"];

    // Vérifier si un média a été téléchargé
    if ($media["error"] === UPLOAD_ERR_OK) {
        $mediaName = $media["name"];
        $mediaTmpName = $media["tmp_name"];
        $mediaType = $media["type"];
        $mediaSize = $media["size"];

        // Déplacer le fichier média vers le dossier de destination
        $destination = "uploads/" . $mediaName;
        if (move_uploaded_file($mediaTmpName, $destination)) {
            // Enregistrer le post dans la base de données avec le lien vers le média
            $sql = "INSERT INTO posts (texte, media) VALUES ('$texte', '$destination')";
            if ($conn->query($sql) === TRUE) {
                // Rediriger vers la page de profil après l'ajout du post
                header("Location: indexx.php");
                exit();
            } else {
                echo "Erreur lors de l'ajout du post dans la base de données : " . $conn->error;
            }
        } else {
            echo "Erreur lors du téléchargement du média.";
        }
    } else {
        // Le média n'a pas été téléchargé, enregistrer le post sans média
        $sql = "INSERT INTO posts (texte) VALUES ('$texte')";
        if ($conn->query($sql) === TRUE) {
            // Rediriger vers la page de profil après l'ajout du post
            header("Location: indexx.php");
            exit();
        } else {
            echo "Erreur lors de l'ajout du post dans la base de données : " . $conn->error;
        }
    }
}
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de publication de post</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="col-lg-7 col-xl-6">
      <div class="card card-white grid-margin">
        <div class="card-body">
          <form id="post-form" action="ajoutpost.php" method="POST">
            <textarea class="form-control" name="texte" id="post-content" placeholder="Entrez votre post" rows="4"></textarea>
            <input type="file" class="form-control" name="media" id="post-media" placeholder="Entrez le média">
            <input type="date" class="form-control" name="date_posts" id="post-date" placeholder="jj/mm/aaaa">
            <div class="post-options">
              <a href="#"><i class="fa fa-camera"></i></a>
              <a href="#"><i class="fas fa-video"></i></a>
              <a href="#"><i class="fa fa-music"></i></a>
            </div>
            <button type="submit" class="btn btn-outline-primary float-right">Publier</button>
          </form>
        </div>
      </div>
      <div id="post-list">
        <!-- La liste des posts ajoutés sera affichée ici -->
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
