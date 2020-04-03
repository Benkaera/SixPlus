<?php
// регистрация

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);
// FILTER_SANITIZE_STRING
//Удаляет теги, при необходимости удаляет или кодирует специальные символы.

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
  echo "Недопустимая длина логина";
  exit();
}
else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
  echo "Недопустимая длина имени";
  exit();
}
else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 25){
  echo "Недопустимая длина пароля (от 8 до 25 символов)";
  exit();
}
else if($_POST['pass'] != $_POST['pass2'] ){
  echo "Пароли не совпадают";
  exit();
}

$pass = md5($pass."ueirhksdhg333");

// БД
$mysql = new mysqli('localhost','root','root','register-bd');
$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
VALUES('$login', '$pass', '$name')");

$mysql->close();

header('Location: /');
?>
