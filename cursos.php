<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilo.css">
	<title>Testando includes</title>
</head>
<body>
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="img/eteclogo.jpeg" class="logoimg"></a>
		</div>	
		<div>
			<h2>ETEC Lauro Gomes</h2>
		
			<ul class="menu">
				<li class="titulos-menu"><a href="escola.php" name="cursos">Escola</a></li>
				<li class="titulos-menu"><a href="cursos.php">Cursos</a></li>
				<li class="titulos-menu"><a href="#">Estágios</a></li>
				<li class="titulos-menu"><a href="#">Vestibular</a></li>
				<li class="titulos-menu"><a href="#">Biblioteca</a></li>
				<li class="titulos-menu"><a href="#">Noticias</a></li>
				<li class="titulos-menu"><a href="#">Intercâmbio</a></li>
				<li class="titulos-menu"><a href="#">Concursos</a></li>
				<li class="titulos-menu"><a href="login.php">Login</a></li>
			</ul>
	
		</div>	
	</div>

	<!-- Cursos -->
	<div class="container-cursos">
		<div class="container-cursos-filhos">
			<h3>Cursos ofereridos</h3>
			<form action="#" method="post">
			<ul>
				<li> Administração</li></a>
				<li>Automação Indutrial</li>
				<li>Contabilidade</li>
				<li>Desenvolvimento de Sistemas</li>
				<li>Eletrônica</li>
				<li>EletroEletrônica</li>
				<li>Ensino Médio</li>
				<li>Ínformática</li>
				<li>Informática P/Internet</li>
				<li>Química</li>
				<li>Logística</li>
			</ul>
		</form>
		</div>
	<hr class="linha-de-separacao">
		<div class="container-cursos-filhos">

			<?php 
				if($administracao == true) {
					echo "Administração";
				}	


			 ?>	
		</div>
	</div>
</body>
</html>