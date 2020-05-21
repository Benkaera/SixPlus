<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- /Сжатие сайта для мобильных устройств -->
		<meta name="viewport" content="width=device-width , initial-scale=1.0">
		<meta http-http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css<?php echo $template;?>" type="text/css" media="screen"/>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		
		
		
		<title>Торговый центр WestPlus</title>
		<script src="js/script.js"></script>
	</head>
	<body style="background-color: #ebebeb;">

<!-- шапка -->
	<?php require "blocks/header.php" ?>
		<?php require "blocks/vision.php" ?>



		
		





<div class="container mt-5">



<!-- Добро пожаловать надпись блок -->
<div class="pricing-header px-3 py-3 pt-md-1 pb-md-4 mx-auto text-center">
	<h3 class="mb-1">WestPlus</h3>
	<h1 class="display-4"><?=$_COOKIE['user']?></h1>
  <h1 class="display-4 font-weight-bold">Добро пожаловать</h1>
  <div class="some-text"><p1>Просматривайте товары, следите за акциями и скидками. Мы работаем, вы отдыхаете. 17 заговора не существует</p1></div>
  
</div>

<div class="d-flex flex-wrap">
<?php
for($i = 0; $i < 5; $i++):
?>

<!-- блок1-5 -->
<div class="card mb-4 shadow-sm text-black bg-light ">
     
     <div class="some-text">
     
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блок <?php  echo ($i+1) ?></h4>
      </div>
      <div class="card-body flex-shrink-1">
				<img src="img/<?php  echo ($i+1) ?>.jpg" alt="1" class="img-thumbnail">
        <h1 class="card-title pricing-card-title">Раздел <?php  echo ($i+1) ?></h1>
        <ul class="list-unstyled mt-3 mb-4 flex-shrink-1">
          <li>Альбом KAROM</li>
          <li>2020</li>
          <li>Поддержка исполнителей</li>
          <li>Запись бесплатно</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary text-black">Тык</button>
      </div>
    </div></div>
    
	<?php endfor; ?>
	
	
<!-- блок6 -->
<div class="card mb-4 shadow-sm text-black bg-light ">
    <div class="some-text">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Блок <?php  echo (6) ?></h4>
      </div>
      <div class="card-body flex-shrink-1">
				<img src="img/<?php  echo (3) ?>.jpg" alt="1" class="img-thumbnail">
        <h1 class="card-title pricing-card-title">Раздел <?php  echo (6) ?></h1>
        <ul class="list-unstyled mt-3 mb-4 flex-shrink-1">
          <li>Альбом KAROM</li>
          <li>2020</li>
          <li>Поддержка исполнителей</li>
          <li>Да</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary text-black">Кнопка</button>
      </div>
    </div></div>
	
</div>

</div>

<?php require "blocks/footer.php" ?>
</body>
</html>
