<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Application Académique</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .about-container {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .vehicle-container {
            background-color: #e9ecef;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
        }
        .vehicle-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .navbar-brand img {
            height: 40px;
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>Application Académique</h1>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#historique">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#payer">Payer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion_admin.php">Compte</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="content">
        <section id="accueil">
            <h2>Bienvenue sur notre Application Académique</h2>
            <p>Gérez vos activités académiques facilement !</p>
        </section>

        <div class="content">
        <div class="about-container">
            <h2></h2>
            <p></p>
        </div>
        
        <div class="vehicle-container">
            <h2>CNSS - RDC</h2>
            <div id="vehicleCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/batiment1.jpg" alt="burean" width="25%"/>
                        <p>Votre assurance</p>
                    </div>
                    <div class="carousel-item">
                        <img src="Img/batiment2.jpg" alt="batiment" width="25%"/>
                        <p></p>
                    </div>
                    <div class="carousel-item">
                        <img src="img/batiment3.jpg" alt="Véhicule 3" width="25%"/>
                        <p></p>
                    </div>
                    <div class="carousel-item">
                        <img src="img/batiment4.jpg" alt="Véhicule 3" width="25%"/>
                        <p></p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#vehicleCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#vehicleCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
        </div>

        <footer>
        <p>&copy; <?php echo date("Y"); ?> activités Academique. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>