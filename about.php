<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- /Сжатие сайта для мобильных устройств -->
		<meta name="viewport" content="width=device-width , initial-scale=1.0">
		<meta http-http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>Торговый центр WestPlus</title>
	</head>
	<body>

 <!-- шапка -->
    <?php require "blocks/header.php" ?>

<!-- mail -->
<form  action="check.php" method="post">
  <input type="email" name="email" placeholder="Введите email" class="form-control">
  <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea>
</form>

    <?php require "blocks/footer.php" ?>


</body>
</html>
