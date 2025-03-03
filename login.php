<?php 
session_start();

$login = strip_tags($_POST['login']);
$password = strip_tags($_POST['password']);

$db = new PDO(
    'mysql:host=localhost;dbname=ardoise_numerique;charset=utf8',
    'root',
    ''
);
$query = $db->prepare('SELECT * FROM users WHERE login_user = :login_user');
$query->execute([
    'login_user' => $login
]);
$users = $query->fetchAll();
if(empty($users)){
    header('Location:admin.php');
}else {
    foreach ($users as $user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            header('Location: back-office.php');
        } else {
            header('Location:admin.php');
        }
    }
}
?>