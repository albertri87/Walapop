<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!-- Latest compiled and minified CSS -->

		<link rel="stylesheet"  href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/estil.css"/>
		<link rel="stylesheet" href="css/usuario.css"/>
		<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		<div class="row">
		<!-- Menu -->
		<div class="side-menu">

		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<div class="brand-wrapper">
				<!-- Hamburger -->
				<button type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Brand -->
					<div class="brand-name-wrapper">
						<a class="navbar-brand" href="#">
							Wallapop
						</a>
					</div>
				<!-- Search -->
				<a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
				<span class="glyphicon glyphicon-search"></span>
				</a>
					<!-- Search body -->
					<div id="search" class="panel-collapse collapse">
						<div class="panel-body">
							<form class="navbar-form" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Menu -->
			<div class="side-menu-container">
			<ul class="nav navbar-nav">

			<li><a href="#"><span class="glyphicon glyphicon-user"></span>UserName<br>2 productos</a></li>
			<li class="active"><a href="#"><span class="glyphicon glyphicon-envelope"></span>Mensajes</a></li>
			<!--<li><a href="#"><span class="glyphicon glyphicon-th-list"></span>Categorias</a></li>-->
			<li class="panel panel-default" id="dropdown">
				<a data-toggle="collapse" href="#dropdown-lvl1">
					<span class="glyphicon glyphicon-th-list"></span> Categorias <span class="caret"></span>
				</a>
				<!-- Dropdown level 1 -->
				<div id="dropdown-lvl1" class="panel-collapse collapse">
					<div class="panel-body">
						<ul class="nav navbar-nav">
							<li><a href="#">Electronica</a></li>
							<li><a href="#">Deportes</a></li>
							<li><a href="#">Coches y motos</a></li>
							<li><a href="#">Juegos y consolas</a></li>
							<li><a href="#">Libros peliculas y musica</a></li>
								<!-- Dropdown level 2 -->
							<!--<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl2">
									<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
								</a>
								<div id="dropdown-lvl2" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a href="#">Link</a></li>
											<li><a href="#">Link</a></li>
											<li><a href="#">Link</a></li>
										</ul>
									</div>
								</div>
							</li>-->
						</ul>
					</div>
				</div>
			</li>

		
			<li><a href="#"><span class="glyphicon glyphicon-map-marker"></span>Nuevo en tu zona</a></li>
			<li><a href="#"><span class="fa fa-smile-o"></span> Invita a amigos</a></li>
			<li><a href="#"><span class="fa fa-question-circle"></span> Ajuda</a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		</div>
		<!-- Main Content -->
		<div class="container-fluid">
			<div class="side-body">
				<h1> Main Content here </h1>
				<pre> Resize the screen to view the left slide menu </pre>
					<?php

						  try {
						    $hostname = "localhost";
						    $dbname = "wallapop";
						    $username = "root";
						    $pw = "13246589";
						    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
						  } catch (PDOException $e) {
						    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
						    exit;
						  }

						    //comprobarcion de que no exista el email previamente
						    $query = $pdo->prepare("SELECT * FROM PRODUCTOS WHERE IMAGEN<>'null' ");
						    $query->execute();
						    $row = $query->fetch();

						  
						 
							echo '<div class="flex">';
							while ( $row ) {

							echo '<div class="grupo separacion altura1">';
    						 //echo '<div class="grupo separacion">';
   							 echo '<img src="'.$row["IMAGEN"].'" alt="'.$row["TITULO"].'" width="250" height="250" class="separacion"/>'."\n";
   							 echo '<h4>'.$row["PRECIO"].'€ </h4>'."\n";
   							 echo '<h4>'.$row["TITULO"].'</h4>'."\n";
   							 echo '<strong>'.$row["DESCRIPCION"].'</strong>'."\n";
   							 echo '</div>';
   						 	$row = $query->fetch();
  							}	
  							echo '</div>';				
  							
  					  //eliminem els objectes per alliberar memòria 
				   		

						
						
					?>
			</div>
		</div>
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
		<script src="js/javas.js"></script> 
	</body>
</html>