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
	<body>

 <!-- шапка -->
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">


<h3>Вход и регистрация</h3>
<form  action="" method="post">
  <input type="text" class="form-control" name="login"
  id="login" placeholder="Введите логин"><br>
  <input type="text" class="form-control" name="name"
  id="name" placeholder="Введите имя"><br>
  <input type="password" class="form-control" name="pass"
  id="pass" placeholder="Введите пароль"><br>
  <button class="btn btn-success">Зарегистрировать</button>

</form>

</div>
    <?php require "blocks/footer.php" ?>


</body>
</html>