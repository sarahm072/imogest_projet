<?php
session_start(); // يجب بدء الجلسة
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="profil_page">
        <div class="sidebar">
            <h2><a href="bienvenu.php">Tableau De Bord</a></h2>
            <nav>
                <ul>
                    <li><a href="profil.php">&#128100; Profil</a></li>
                    <li><a href="#">&#128276; Notifications</a></li>
                    <li><a href="#">&#10084; Favoris</a></li>
                    <li><a href="#">&#128221; Historique</a></li>
                    <li><a href="logout.php">&#128682; Déconnexion</a></li> 
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="profil">
                <h2>PROFIL</h2>
                <div class="informations">
                    <h4>INFORMATIONS PERSONNELLES</h4>
                    <hr>
                    <div class="info-row">
                        <span><strong>NOM:</strong> <?php echo $_SESSION['name']; ?></span>
                    </div>
                    <div class="info-row">
                        <span><strong>EMAIL:</strong> <?php echo $_SESSION['valid']; ?></span>
                    </div>
                    <div class="info-row">
                        <span><strong>TELEPHONE:</strong> <?php echo $_SESSION['phone_num']; ?></span>
                    </div>
                </div>
                <div class="details">
                    <h4>DETAILS DU COMPTE</h4>
                    <hr>
                    <div class="info-row">
                        <span><strong>NOM D'UTILISATEUR:</strong> <?php echo $_SESSION['name']; ?></span> 
                    </div>
                    <div class="info-row">
                        <span><strong>CRÉÉ LE:</strong> 02-2100-1743</span> 
                    </div>
                </div>
                <div class="button-container">
                    <button class="modify-button">MODIFIER LE PROFIL</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
