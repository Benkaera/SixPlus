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

<div class="container mt-5">

<h3 class="mb-5">Наша Статья</h3>

<!-- Добро пожаловать надпись блок -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Добро пожаловать</h1>
  <p class="lead">Просматривайте товары, следите за акциями и скидками. Мы работаем, вы отдыхаете. 17 заговора не существует</p>
</div>

<div class="d-flex flex-wrap">
<?php
for($i = 0; $i < 5; $i++):
?>

<!-- блок1 -->
<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блок</h4>
      </div>
      <div class="card-body">
				<img src="img/<?php  echo ($i+1) ?>.jpg" alt="1" class="img-thumbnail">
        <h1 class="card-title pricing-card-title">$100 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Адьбом KAROM</li>
          <li>2020</li>
          <li>Поддержка исполнителей</li>
          <li>Запись бесплатно</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Тык</button>
      </div>
    </div>
	<?php endfor; ?>
</div>

</div>

<?php require "blocks/footer.php" ?>
</body>
</html>
