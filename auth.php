<?php
header("Content-Type: text/html; charset=utf-8");
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass."ueirhksdhg333");

// БД
$mysql = new mysqli('localhost','mrtops031_bd2','765238aA','mrtops031_bd2');

// $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
// VALUES('$login', '$pass', '$name')");
$result = $mysql->query("SELECT * FROM `users` WHERE
`login` = '$login' AND `pass` = '$pass'");

// Конвертируем в вид массива
$user = $result->fetch_assoc();
if(count($user) == 0){
    header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php/');
    echo "<script>alert('пользователь не найден. Через 5 секунд вас переадресует обратно');</script>";
     
 
  exit();
}

setcookie('user', $user['name'], time() + 3600 , "/");



$mysql->close();

header('Location: /');

?>
