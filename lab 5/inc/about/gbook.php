<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Гостевая книга</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-4"></div>
				<div class="col-5">
					<div class="container" id="FormCentr">
						<form action = "/lab5/inc/about/form.php" method="POST">
							<div class="row">
								<label >Имя пользователя</label>
								<input class="form-control" type="name" name="name" placeholder="Введите Имя ">
							</div>
							<div class="row">
								<label >Email address</label>
								<input class="form-control" type="email" name="email" placeholder="Введите Email ">
							</div>
							<div class="row">
								<label>Сообщение</label>
								<textarea  class="form-control" type="text" name="text" placeholder="Сообщение"></textarea>
							</div>
							<div class="row" id="btnn">
								<input class="btn btn-success" type="submit" name="submit" value="Отправить"></input >
								<a href="../../index.php?id=fff">Вернуться</a>
							</div>
							
						</form>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>
 
