<!DOCTYPE html>
<html>
<head>
  <title>Ma Page d'Accueil Facebook</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <style type="text/css">
    /* Réinitialisation des styles par défaut */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

header {
  background-color: #3b5998;
  color: #fff;
  padding: 10px;
}

nav {
  display: flex;
  align-items: center;
}

.logo img {
  height: 40px;
  margin-right: 10px;
}

.search input {
  width: 300px;
  padding: 5px;
  border-radius: 20px;
  border: none;
}

.menu ul {
  display: flex;
  list-style: none;
}

.menu li {
  margin-right: 10px;
  cursor: pointer;
}

.content {
  padding: 20px;
}

footer {
  background-color: #f0f2f5;
  padding: 10px;
  text-align: center;
  font-size: 12px;
}
.container {
  display: flex;
}

.sidebar {
  width: 250px;
  background-color: #f0f2f5;
  padding: 20px;
}


.sidebar h2 {
  margin-bottom: 20px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
}

.sidebar li {
  margin-bottom: 5px;
}

.main-content {
  flex: 1;
  padding: 20px;
}

.profile {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.profile img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 10px;
}

.profile h1 {
  font-size: 24px;
}

.stats {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.stat {
  text-align: center;
}

.stat h3 {
  font-size: 18px;
}

.actions {
  margin-bottom: 20px;
}

.actions button {
  padding: 10px 20px;
  background-color: #3b5998;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

.publications {
  margin-bottom: 20px;
}

.publication {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.publication img {
  width:100px;
  height: 100px;
  object-fit: cover;
  margin-right: 10px;
}

.publication p {
  font-size: 14px;
}

  </style>
  <header>
    <nav>
      <div class="logo">
        <img src="logo.png" alt="Facebook Logo">
      </div>
      <div class="search">
        <input type="text" placeholder="Rechercher">
      </div>
      <div class="menu">
        <ul>
          <li>Accueil</li>
          <li>Amis</li>
          <li>Messages</li>
          <li>Notifications</li>
        </ul>
      </div>
    </nav>
  </header>

  <section class="content">
    <!-- Contenu de la page d'accueil -->
  </section>

  <footer>
    <p>&copy; 2023 Mon Application Facebook</p>
  </footer>
   <div class="container">
    <div class="sidebar">
      <!-- Contenu de la barre latérale avec la liste des followers -->
      <h2>Followers</h2>
      <ul>
        <li>Follower 1</li>
        <li>Follower 2</li>
        <li>Follower 3</li>
        <!-- Ajoutez les autres followers ici -->
      </ul>
    </div>
    <div class="main-content">
      <!-- Contenu principal de la page -->
      <div class="profile">
        <!-- Profil de l'utilisateur -->
        <img src="profil.jpg" alt="Photo de profil">
        <h1>Nom de l'utilisateur</h1>
      </div>
      <div class="stats">
        <!-- Statistiques -->
        <div class="stat">
          <h3>Posts</h3>
          <p>10</p>
        </div>
        <div class="stat">
          <h3>Followers</h3>
          <p>100</p>
        </div>
        <div class="stat">
          <h3>Following</h3>
          <p>50</p>
        </div>
      </div>
      <div class="actions">
        <!-- Actions -->
        <button onclick="ajouterStory()">Ajouter une Story</button>
      </div>
      <div class="publications">
        <!-- Liste des publications -->
        <h2>Publications</h2>
        <div class="publication">
          <img src="publication1.jpg" alt="Publication 1">
          <p>Description de la publication 1</p>
        </div>
        <div class="publication">
          <img src="publication2.jpg" alt="Publication 2">
          <p>Description de la publication 2</p>
        </div>
        <!-- Ajoutez les autres publications ici -->
      </div>
    </div>
  </div>
</body>
</html>
