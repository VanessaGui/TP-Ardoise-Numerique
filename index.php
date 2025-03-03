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
</head>
<body class="roboto-regular">
    <section class="header">
        <div class="menu">
            <a href="index.php" class="menu-item">accueil</a>
            <div class="menu-item">|</div>
            <?php if ($_SESSION){ ?>
                <a href="back-office.php" class="menu-item">admin</a>
            <?php } else { ?> 
                <a href="admin.php" class="menu-item">se connecter</a>
                <?php } ?>
        </div>
    </section>
    <div class="title">
        <h1>ARDOISE NUMERIQUE</h1>
    </div>
    <hr>
    <?php  
        $query = $db->prepare('SELECT * FROM ardoise');
        $query->execute();
        $ardoise = $query ->fetchAll();
    ?>
    <div class="container">
        <div class="container-content">
        <?php if($ardoise){
            foreach($ardoise as $ardoise_content){
        ?>
        <div class="content">
            <p><?=$ardoise_content['prenom']?><p>
            <p><?=$ardoise_content['montant'].' €'?></p>
        </div>
        <?php }} ?>
        </div>
    </div>
</body>
</html>