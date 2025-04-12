<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="page">
        <div class="sidebar">
            <h2><a href="bienvenu.html">Tableau De Bord</a></h2>
            <nav>
                <ul>
                    <li><a href="profil.html">&#128100; Profil</a></li>
                    <li><a href="#">&#128276; Notifications</a></li>
                    <li><a href="#">&#10084; Favoris</a></li>
                    <li><a href="#">&#128221; Historique</a></li>
                    <li><a href="#">&#128682; Déconnexion</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <h1>Bienvenue dans votre espace client, <span>User</span></h1>
            <p>Utilisez le menu à gauche pour naviguer à travers vos fonctionnalités.</p>
            <div class="notifications">
                <h3>Dernières Notifications</h3>
                <p>Aucune notification pour le moment.</p>
            </div>
            <div class="listings">
                <h3>Liste des biens immobiliers disponibles</h3>
                <div class="property">
                    <h4>🏠 Annonce de Vente: Appartement F3 à vendre</h4>
                    <p>📍 Allier, Stade Rue des Ouvriers</p>
                    <p>Appartement spacieux de 3 pièces avec balcon et vue sur mer.</p>
                    <p><strong>Type de bien:</strong> Appartement</p>
                    <p><strong>Prix:</strong> 120,000 DA</p>
                
                    <div class="buttons">
                        <button class="btn favoris">❤️ Ajouter aux favoris</button>
                        <button class="btn photos" onclick="openModal1(['./image/maisson/home1-1.jpg', './image/maisson/home1-2.jpg'])">📷 Voir Photos</button>
                        <button class="btn louer">🏡 Louer</button>
                    </div>
                </div>
                
                <div class="property">
                    <h4>🏠 Annonce de Vente: Villa de Luxe à vendre</h4>
                    <p>📍 Alger, Hydra</p>
                    <p>Villa moderne avec piscine, grand jardin et garage.</p>
                    <p><strong>Type de bien:</strong> Villa</p>
                    <p><strong>Prix:</strong> 2,500,000 DA</p>
                    <div class="buttons">
                        <button class="btn favoris">❤️ Ajouter aux favoris</button>
                        <button class="btn photos" onclick="openModal2()">📷 Voir Photos</button>
                        <button class="btn louer">🏡 Louer</button>
                    </div>
                </div>
                   <!-- Fenêtre modale -->
                   <div id="photoModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <img id="modalImage" src="./image/maisson/home1-1.jpg" alt="Photo de l'annonce">
                        <button onclick="prevImage()">◀</button>
                        <button onclick="nextImage()">▶</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>