<?php 
session_start();
$db = new PDO(
	'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
	'root',
	'',
	);

$login = $_POST['login'];
$password = strip_tags($_POST['password']);

    if (isset($_POST['login']) AND !empty($_POST['login'])){
        $query = $db -> prepare('UPDATE users SET login_user= :login_user, password = :password_user WHERE id_user = :id');
        $query-> execute([
            'id' => $_SESSION['id_user'],
            'login_user' => $login,
            'password_user' => password_hash($password, PASSWORD_DEFAULT),
        ]);
    }
    else {
        die('Erreur');
    }
header('Location: back-office.php'); 
?>