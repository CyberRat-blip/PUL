
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<title>cyber hotel</title>
	</head>
	<body>
		<div class="conteiner-fluid">
				<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
					<a class="navbar-brand" href="#">
						<img src="img/logo.png" alt="logo" class="img-thumbnail">
					</a>
					<div class="collapse navbar-collapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href='about.inc.php'>Отзывы <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="../contact/contact.inc.php">Номера <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Важная информация <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="inc/lids/lids.inc.php">Спец прeдложения <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="#">Контакты <span class="sr-only">(current)</span></a>
							</li>
						</ul>		
					</div>
			</nav>
			<img src="img/top.png" class="img-fluid" alt="Адаптивные изображения">
			<div class="row bg-info" style="height: 80px; padding:10px; ">
			    <div class="col-2"></div>
			    <div class="col-2 text-light" style="padding-top: 10px"><h3>Бронирование</h3></div>
			    <div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control" placeholder="Заезд">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control" placeholder="Выезд">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control"  placeholder="Гости">	 
		    	</div>
		    	<button type="button" class="btn btn-success" style="height: 40px; margin-top: 10px" ><h5>Найти билет</h5></button>
	    	</div>
	    	<?php
	$id='fff';
	if(count($_GET)>0)
	{
		include '/lab5/routing.php'; 
	}
?>
	    	<!--Конец главной части-->
	    	<div class="conteiner">
	<br>
		<a href="gbook.php" class="btn btn-primary btn-block" role="button">Оставить отзыв</a>
	<br>
	<?php
		include '\xampp\htdocs\lab5\bd.php';
		foreach(getALL() as $row)
		{	

			echo
			"	<div class=\"conteiner\">".
				"<div class=\"card\" >".
					"<div class=\"row no-gutters\">".
						"<div class=\"col-1\"></div>".
						"<div class=\"col-8\">".
							"<div class=\"card-body\">".
								"<h5 class=\"card-title\">".$row["name"]."</h5>".
								"<p class=\"card-text\">".$row["text"]."</p>".
							"</div>".
						"</div>".
					"</div>".
				"</div>".
			"</div><br>";
		}
	?>
</div>

	    	<!--Подвал-->
	    	<div class="conteiner bg-dark" style="margin-top: 20px">
	    		<div class="row">
	    			<div class="col-2"></div>
	    			<div class="col-3"><p class="h4 text-light">Улица не имеет смысла</p></div>
	    			<div class="col-1"><a href="#" class="h4 text-light">vk</a></div>
	    			<div class="col-1"><a href="#" class="h4 text-light">inst</a></div>
	    			<div class="col-1"><a href="#" class="h4 text-light">discord</a></div>
	    			<div class="col-2 h4 text-light">+7999 000 00 00</div>
	    		</div>
	    	</div>
		</div>
	</body>
</html>