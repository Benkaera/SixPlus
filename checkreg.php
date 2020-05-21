<?php
header("Content-Type: text/html; charset=utf-8");
// регистрация

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);
// FILTER_SANITIZE_STRING
//Удаляет теги, при необходимости удаляет или кодирует специальные символы.

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
  header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php');
  echo "<script>alert('Недопустимая длина логина. Через 5 секунд вас переадресует обратно');</script>";
  exit();
}
else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
  header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php');
  echo "<script>alert('Недопустимая длина имени. Через 5 секунд вас переадресует обратно');</script>";
  exit();
}
else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 25){
  header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php');
  echo "<script>alert('Недопустимая длина пароля (от 8 до 25 символов). Через 5 секунд вас переадресует обратно');</script>";
  exit();
}
else if($_POST['pass'] != $_POST['pass2'] ){
  header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php');
  echo "<script>alert('Пароли не совпадают. Через 5 секунд вас переадресует обратно');</script>";
  exit();
}

$pass = md5($pass."ueirhksdhg333");

// БД
$mysql = new mysqli('localhost','mrtops031_bd2','765238aA','mrtops031_bd2');




//составляем запрос к БД
$queryy = ("SELECT * FROM users WHERE login='$login'");
 
//Отправляем запрос в БД (у меня в примере для подключения используется переменная $mysqli, подставьте свою)
$result = mysqli_query($mysql, $queryy) or die(mysqli_error($mysql));
 
// подсчитываем сколько получили рядов выборки и записываем в переменную $count
$count = mysqli_num_rows($result);
 
//выполняем проверку, по результатам которой выполняем то или иное действие
    if ($count != 0) {
             header('Refresh: 5; url=http://mrtops031.beget.tech/reg.php');
             echo "<script>alert('Ошибка регистрации! Такой логин уже существет). Через 5 секунд вас переадресует обратно');</script>";
       
    }else{
        
        $mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
        VALUES('$login', '$pass', '$name')");

        $mysql->close();
    }








    


header('Location: /');
?>
