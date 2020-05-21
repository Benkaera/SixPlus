<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- /Сжатие сайта для мобильных устройств -->
		<meta name="viewport" content="width=device-width , initial-scale=1.0">
		<meta http-http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>Контактная форма WestPlus</title>
		<script src="js/script.js"></script>
	</head>
	<body style="background-color: #ebebeb;">

 <!-- шапка -->
    <?php require "blocks/header.php" ?>
    	<?php require "blocks/vision.php" ?>
    <div class="container mt-5">
        <div class="some-text">


<h3>Контактная форма</h3>
<h4>Напишите свой отзыв, предложение и мы его обязательно прочитаем</h4>
<!-- mail -->
<form  action="check.php" method="post">
  <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
  <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
  <button type="submit" name="send" class="btn btn-success">Отправить</button>
</form>
</div></div>
    <?php require "blocks/footer.php" ?>


</body>
</html>
