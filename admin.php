<!DOCTYPE html>
<html lang="fr-FR">
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
            <a href="admin.php" class="menu-item">admin</a>
            <div class="menu-item">|</div>
            <a href="logout.php" class="menu-item">se connecter</a>
        </div>
    </section>
    <div class="title2 title-color">
        <h1>SE CONNECTER</h1>
    </div>
        <form id="form-connect" class="form" action="login.php" method="post">
        <div class="form-content text-color"> 
            <span class="error"></span>
            <label for="login">Login (*)</label>
            <input class="form-input login-form" type="text" name="login" required/>
            <label for="password">Mot de passe (*)</label>
            <input class="form-input password-form" type="password" name="password" required /> 
            <div class="form-submit">
                <input class="form-button"type="submit" value="SE CONNECTER"/>
            </div>
        </div>
        </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoire.</p>
        </div>
</body>
</html>