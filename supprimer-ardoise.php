<?php 
session_start();
$db = new PDO(
	'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
	'root',
	'',
	);

    if (isset($_GET['id']) AND !empty($_GET['id'])){
        $del = $db -> prepare('DELETE FROM ardoise WHERE id_ardoise = :id');
        $del -> execute([
            'id' => $_GET['id'],
        ]);
    }
    else {
        die('Erreur');
    }
header('Location: back-office.php'); 
?>