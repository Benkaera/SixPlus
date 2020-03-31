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
		<!-- Шапка -->
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">WestPlus</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Главная</a>
    <a class="p-2 text-dark" href="#">Контакты</a>
    <a class="p-2 text-dark" href="#">Товары</a>
      </nav>
  <a class="btn btn-outline-primary" href="#">Войти</a>
</div>
<div class="container mt-5">

<h3 class="mb-5">Наша Статья</h3>


<div class="d-flex flex-wrap">
<?php
for($i=0;$i<5;$i++):
?>

<!-- блок1 -->
<div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блок</h4>
      </div>
      <div class="card-body">
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
</body>
</html>
