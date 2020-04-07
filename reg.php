<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- /Сжатие сайта для мобильных устройств -->
		<meta name="viewport" content="width=device-width , initial-scale=1.0">
		<meta http-http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>Страница входа</title>
	</head>
	<body style="background-color: #ebebeb;">

 <!-- шапка -->
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
      <?php
      if($_COOKIE['user'] == ''):
      ?>
<!-- если куки не установлены -->
      <div class="row">
      <div class="col">
        <h3>Регистрация</h3>
        <form  action="checkreg.php" method="post">
          <input type="text" class="form-control" name="login"
          id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="name"
          id="name" placeholder="Введите имя"><br>
          <input type="password" class="form-control" name="pass"
          id="pass" placeholder="Введите пароль"><br>
          <input type="password" class="form-control" name="pass2"
          id="pass" placeholder="Повторите пароль"><br>
          <button class="btn btn-success" type="submit">Зарегистрировать</button>
        </form>
      </div>

      <div class="col">
        <h3>Авторизация</h3>
        <form  action="auth.php" method="post">
          <input type="text" class="form-control" name="login"
          id="login" placeholder="Введите логин"><br>
          <input type="password" class="form-control" name="pass"
          id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Войти</button>
        </form>
      </div>
<?php else: ?>
  <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь
  <a href="/exit.php">Выход</a>.</p>
<?php endif;?>
    </div>

  </div>
    <?php require "blocks/footer.php" ?>


</body>
</html>
