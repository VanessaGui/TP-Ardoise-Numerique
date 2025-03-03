<!DOCTYPE html>
<html lang="fr-FR">
<?php session_start(); 
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
        <h1>MODIFIER UNE ARDOISE</h1>
    </div>
    <?php 
        $query = $db->prepare('SELECT * FROM ardoise WHERE id_ardoise = :id');
        $query->execute([
            'id' => $_GET['id'],
        ]);
        $ardoise = $query ->fetchAll();
    ?>
    <form id="form-modif-ardoise" class="form" action="action-modifier.php" method="post">
        <div class="form-content text-color"> 
        <span class="error"></span>
        <?php if ($ardoise){
            foreach($ardoise as $ardoise_content){ 
        ?>
            <label for="name">Prénom (*)</label>
            <input class="form-input ardoise-name" type="text" name="name" value="<?=$ardoise_content['prenom']?>" required/>
            <label for="price">Montant (*)</label>
            <input class="form-input ardoise-price" type="text" name="price" value="<?=$ardoise_content['montant']?>" required /> 
            <?php }} ?>
            <div class="form-submit">
                <input class="form-button"type="submit" value="MODIFIER"/>
            </div>
            <input type="hidden" name="postid" value="<?= $_GET['id']?>" />
        </div>
        </form>
        <div class="form-explain">
            <p>Les champs marqués d'un (*) sont obligatoire.</p>
        </div>
</body>
</html>