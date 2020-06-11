
<?php
	if(count($_POST)>0)
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		
		file_put_contents('reviewss.txt', "\n $name $email \n $message", FILE_APPEND);  
		echo('Ваше сообщене оправленно');
	}
?> 
<!DOCTYPE html>
<html>
	<head>
		<meta  charset="UTF-8">
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
								<a class="nav-link" href='about.inc.php'>Об отеле <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="../contact/contact.inc.php">Номера <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="../../index.php">Спец пердложения <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="../contact/contact.inc.php">Галерея <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">	
								<a class="nav-link" href="gbook.php">Контакты <span class="sr-only">(current)</span></a>
							</li>
						</ul>		
					</div>
			</nav>
			<img src="img/top.png" class="img-fluid" alt="нет картинки">
			<div class="row bg-info" style="height: 80px; padding:10px; ">
			    <div class="col-2"></div>
			    <div type="text" class="col-2 text-light" style="padding-top: 10px"><h3>Бронирование</h3></div>
			    <div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control" placeholder="Заезд">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control" placeholder="Выезд">	 
		    	</div>
		    	<div class="col-1" style="padding-top: 10px">
			      	<input type="text" class="form-control"  placeholder="Гостей">	 
		    	</div>
		    	<button type="button" class="btn btn-success" style="height: 40px; margin-top: 10px" ><h5>Найти билет</h5></button>
	    	</div>
	    	<!--Конец шапки-->
	    	<div class="conteiner">
	    		<br>
	    		<div class="row">
	    			<div class="col-3"></div>
	    			<div class="col-4">
		    			<div class="conteiner">
		    				<div class="row">
		    					<div class="col-12">
				    				<h6>ЛЛЛЛЛл</h6>
				    				<div>
				    					NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
				    				</div>
			    				</div>
		    				</div>
		    				<br>
		    				<div class="row">
		    					<div class="col-6">
		    						<h6>ЛЛЛЛЛл</h6>
				    				<div>
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    				</div>
		    					</div>
		    					<div class="col-6">
		    						<h6>ЛЛЛЛЛл</h6>
				    				<div>
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    				</div>
		    					</div>
		    				</div>
		    				<br>
		    				<div class="row">
		    					<div class="col-6">
		    						<h6>ЛЛЛЛЛл</h6>
				    				<div>
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    				</div>
		    					</div>
		    					<div class="col-6">
		    						<h6>ЛЛЛЛЛл</h6>
				    				<div>
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    					NNNNNNNNNNNNNNNNNN
				    				</div>
		    					</div>
		    				</div>
		    			</div>
	    			</div>
	    			<div class="col-2">
	    				<div class="conteiner">
	    					<form method="post">
							<div class="row">
								<label >Имя пользователя</label>
								<input class="form-control" type="text" name="name" placeholder="Введите Имя ">
							</div>
							<div class="row">
								<label >Email address</label>
								<input class="form-control" type="text" name="email" placeholder="Введите Email ">
							</div>
							<div class="row">
								<label>Сообщение</label>
								<textarea  class="form-control" type="text" name="message" placeholder="Сообщение" name="text"></textarea>
							</div>
							<div class="row" id="btnn">
								<input class="btn btn-success" type="submit" value="Оставить отзыв"></input >
								</div>
						</form> 	 
	    				</div>
	    			</div>
	    	
	    		</div>
	    		<br>
	    		<div class="row">
	    			</div>
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
