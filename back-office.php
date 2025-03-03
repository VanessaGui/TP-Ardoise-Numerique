<!DOCTYPE html>
<html lang="fr-FR">
<?php 

session_start();
if (empty($_SESSION)){
    header('Location: admin.php');
} else {
    $db = new PDO(
        'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
        'root',
        '',
        );
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
            <h1>BACK OFFICE</h1>
        </div>
        <?php 
            $query = $db->prepare('SELECT * FROM ardoise');
            $query->execute();
            $ardoise = $query ->fetchAll();
        ?>
        <div class="container2">
            <a href="creer-ardoise.php" class="text-color">Créer une ardoise</a>
            <p class="text-color">Modifier une ardoise</p>
                <?php if ($ardoise){
                    foreach($ardoise as $ardoise_content){ ?>
                <ul> 
                    <a href="modifier-ardoise.php?id=<?=$ardoise_content['id_ardoise']?>" class="text-other-color">&#8594; <?=$ardoise_content['prenom'] ?></a>
                </ul>
                <?php }} ?>
            <p class="text-color">Supprimer une ardoise</p>
            <?php if ($ardoise){
                    foreach($ardoise as $ardoise_content){ ?>
                <ul> 
                    <a href="supprimer-ardoise.php?id=<?=$ardoise_content['id_ardoise']?>" class="text-other-color delete">&#8594; <?=$ardoise_content['prenom'] ?></a>
                </ul>
                <?php }} ?>
            <a href="modifier-mdp.php" class="text-color">Modifier mon mot de passe</a>
        </div>
        <?php } ?>
</body>
</html>