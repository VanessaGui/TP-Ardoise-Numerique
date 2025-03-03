<?php 
session_start();
$db = new PDO(
	'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
	'root',
	'',
	);

$prenom = strip_tags($_POST['name']);
$montant = strip_tags($_POST['price']);

    if (isset($_POST['name']) AND !empty($_POST['name'])){
        $query = $db -> prepare('UPDATE ardoise SET prenom = :prenom, montant = :montant, id_user = :id_user WHERE id_ardoise = :id');
        $query-> execute([
            'id' => $_POST['postid'],
            'prenom' => $prenom,
            'montant' => $montant,
            'id_user' => $_SESSION['id_user'],
        ]);
    }
    else {
        die('Erreur');
    }
header('Location: back-office.php'); 
?>