<!DOCTYPE html>
<html lang="fr-FR">
<?php 
session_start(); 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ardoise numérique</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type="module" src="scripts.js"></script>
</head>
<body class="roboto-regular">
<section class="header">
        <div class="menu">
            <a href="index.php" class="menu-item">accueil</a>
            <div class="menu-item">|</div>
            <a href="back-office.php" class="menu-item">admin</a>
            <div class="menu-item">|</div>
            <a href="logout.php" class="menu-item">se déconnecter</a>
        </div>
    </section>
    <div class="title2 title-color">
        <h1>CREER UNE ARDOISE</h1>
    </div>
    <form id="form-ardoise" class="form" action="action-creer.php" method="post">
        <div class="form-content text-color"> 
            <span class="error"></span>
            <label for="name">Prénom (*)</label>
            <input class="form-input ardoise-name" type="text" name="name" required/>
            <label for="price">Montant (*)</label>
            <input class="form-input ardoise-price" type="text" name="price" required /> 
            <div class="form-submit">
                <input class="form-button"type="submit" value="VALIDER"/>
            </div>
        </div>
        </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoire.</p>
        </div>
</body>
</html>