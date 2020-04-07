<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- /Сжатие сайта для мобильных устройств -->
		<meta name="viewport" content="width=device-width , initial-scale=1.0">
		<meta http-http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<title>Разработки WestPlus</title>
	</head>
	<body style="background-color: #ebebeb;">

 <!-- шапка -->
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfirmDelete">Вы уверены?</button>

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Вы уверены?</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-times fa-4x animated rotateIn"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="" class="btn  btn-outline-danger">Да</a>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Нет</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->
</div>
<h3>Разработки</h3>

  <p>Первый проект</p><br>
  <a class="btn btn-outline-primary" href="/reg.php">Нажать</a>

</div>
    <?php require "blocks/footer.php" ?>


</body>
</html>
