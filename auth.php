<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."ueirhksdhg333");

// БД
$mysql = new mysqli('localhost','root','root','register-bd');

// $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
// VALUES('$login', '$pass', '$name')");
$result = $mysql->query("SELECT * FROM `users` WHERE
`login` = '$login' AND `pass` = '$pass'");

// Конвертируем в вид массива
$user = $result->fetch_assoc();
if(count($user) == 0){
  echo "пользователь не найден";
  exit();
}

setcookie('user', $user['name'], time() + 3600 , "/");



$mysql->close();

header('Location: /');

?>
