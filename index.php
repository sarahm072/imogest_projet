<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - ImmoGest</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <nav class="nov" id="nav">
            <ul>
                <li class="active"><a href="#accueil">Accueil</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#apropos">À Propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li ><a href="login.html">Se connecter</a></li>
                <li class="login"><a href="singup.html">S'inscrire</a></li>
            </ul>
        </nav>
    </div>
   
    
    <div class="accueil" id="accueil">
        <h1>BIENVENUE SUR <span>IMMO GEST</span></h1>
        <img src="./image/logo.jpg" alt="Logo ImmoGest" width="200px">
        <p>Une plateforme où vous pouvez acheter, vendre et louer tous types de biens immobiliers en toute sécurité et au meilleur prix, avec des offres exclusives adaptées à vos besoins !</p>
    </div>
    
    <div class="service" id="service">
        <div class="s1">
            <h2>Location de Biens</h2>
            <h4>Consultez une large sélection de biens à louer, y compris des appartements, maisons et terrains.</h4>
        </div>
        <div class="s2">
            <h2>Achat et Vente</h2>
            <h4>Achetez ou vendez des biens immobiliers en toute sécurité grâce à notre plateforme.</h4>
        </div>
        <div class="s3">
            <h2>Gestion Locative</h2>
            <h4>Confiez-nous la gestion de vos biens locatifs pour un suivi efficace des locations et des locataires.</h4>
        </div>
    </div>
    <div class="features" id="apropos">
        <div>
            <img src="./image/security_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="Sécurité">
            <h3>Sécurité</h3>
            <p>Transactions sécurisées et protection des données personnelles.</p>
        </div>
        <div>
            <img src="./image/search_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="Recherche avancée">
            <h3>Recherche Avancée</h3>
            <p>Filtres précis pour trouver le bien idéal en quelques clics.</p>
        </div>
        <div>
            <img src="./image/forum_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.svg" alt="Support client">
            <h3>Support Client</h3>
            <p>Assistance dédiée pour vous accompagner dans vos démarches.</p>
        </div>
    </div>
    <div class="client">
        <h2>Avis à Nos Clients</h2>
        <div class="customers-container">
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Le service client est excellent et très réactif. Je recommande!</p>
                <h4>SARA Meziane</h4>
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>IMMOGEST m'a permis de trouver la maison de mes rêves rapidement et facilement.</p>
                <h4>Amir Benali</h4>
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>Très bonne application!</p>
                <h4>Aymen Latrech</h4>
            </div>
        </div>   
    </div>
    <div class="inscrire">
        <h2>Prêt à Trouver Votre Bien Immobilier?</h2>
        <h4>Inscrivez-vous dès maintenant et découvrez nos offres exclusives!</h4>
        <button onclick="window.location.href='singup.html'">S'inscrire Gratuitement</button>
    </div>
    <div class="contact" id="contact">
        <h2>Contactez-nous</h2>
        <div class="content">
            <div class="social">
                <div class="adress">
                    <img src="./image/location_on_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                    <h4>Adresse</h4> 
                </div>
                <p>123 RUE DE L'IMMOBILIER, ALGER, ALGÉRIE</p>
                <div class="phone">
                    <img src="./image/call_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                    <h4>Téléphone</h4> 
                </div>
                <p>+213 123 456 789</p>
                <div class="mail">
                    <img src="./image/mail_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                    <h4>Email</h4> 
                </div>
                <p>contact@immogest.dz</p>
            </div>
            <div class="message">
                <h3>Envoyez-nous un message</h3>
                <h5>Votre Nom</h5>
                <input type="text">
                <h5>Votre Email</h5>
                <input type="email" name="" id="">
                <h5>Votre Message</h5>
                <textarea name="" id=""></textarea>
                <Button>Envoyer</Button>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>À PROPOS DE NOUS</h3>
                <p>Nous aidons les gens à acheter, vendre et louer des biens immobiliers en toute sécurité.</p>
            </div>
            <div class="footer-section">
                <h3>LIENS RAPIDES</h3>
                <ul>
                    <li><a href="#accueil">Page d'accueil</a></li>
                    <li><a href="#service">Nos services</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </div>
        </div>
        <p class="footer-bottom">ImmoGest 2025 © Tous droits réservés</p>
    </footer>
    
</body>
</html>
