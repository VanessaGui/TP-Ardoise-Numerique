<?php 
session_start();
$db = new PDO(
	'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
	'root',
	'',
	);

$prenom = strip_tags($_POST['name']);
$montant = strip_tags($_POST['price']);
if(isset($prenom) && !empty($prenom) && isset($montant) && !empty($montant)) {
    $query = $db->prepare('INSERT INTO ardoise (prenom, montant, id_user) VALUES (:prenom, :montant, :id_user)');
    $query->execute([
    'prenom' => $prenom,
    'montant' => $montant,
    'id_user' => $_SESSION['id_user'],
    ]);
  }
  header('Location: back-office.php'); 
?>