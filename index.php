<!DOCTYPE html>
<html>
</head>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="css/css.css" rel="stylesheet" type="text/css"/>

<title>Coleção Quadrinhos</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Quadrinhos</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarQuadrinhos">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navBarQuadrinhos">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link">Home</a></li>
					<li class="nav-item"><a class="nav-link">Curiosidades</a></li>
					<li class="nav-item"><a class="nav-link">Novos</a></li>
					<li class="nav-item"><a class="nav-link" href="http://pt-br.facebook.com">Social</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link">Login</a></li>
					<li class="nav-item"><a class="nav-link">Cadastrar-se</a></li>
				</ul>
				
				<form class="form-inline">
					<input class="form-control ml-4 mr-2" type="search" placeholder="Buscar..."/>
					<button class="btn btn-default" type="submit">Ok</button>
				</form>
			</div>
	</nav>
</div>
			<div class="container" id="tamanhobanner">
				<div id="banner">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleControls" data-slide-to="1"></li>
						</ol>	
						
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="img/1.jpg" alt="Primeiro">
								<div class="carousel-caption d-none d-md-block">
									<h2>Teste</h2>
									<p>Conteudo de teste</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="img/2.jpg" alt="Segundo">
								<div class="carousel-caption d-none d-md-block">
									<h2>Teste2</h2>
									<p>Conteudo de teste2</p>
								</div>
							</div>
						
						</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Próximo</span>
					</a>
					</div>
				</div>
			</div>	
			<div class="container" id="Corpo">
				<div class="container" id="AdicionadosRecente">
						<div class="row" id="addRes">
							<div class="col-md">Adicionados recentes</div>
						</div>
					<div class="row">
						<div class="col-sm-4">
									<div class="card">
										<img class="card-img-top" src="img/c1.jpg"/>
										<div class="card-body">
											<h4 class="card-title">The Avengers</h4>
											<h6 class="card-subtitle">HQ nº1</h6>
											<p class="card-text">HQ que narra a história dos Vingadores.</p>
										</div>
										<ul class="list-group list-group-flush">
											<li class="list-group-item">Marvel Studios</li>
											<li class="list-group-item">Desaconselhável para menores de 18 anos.</li>
											<li class="list-group-item">R$ 30,00</li>
										</ul>
										<div class="card-footer text-muted">
											Comprar Agora!
										</div>
									</div>
						</div>
						<div class="col-sm-4">
								<div class="card">
									<img class="card-img-top" src="img/c2.jpg"/>
									<div class="card-body">
										<h4 class="card-title">The Avengers</h4>
										<h6 class="card-subtitle">HQ nº2</h6>
										<p class="card-text">HQ que narra a história dos Vingadores.</p>
									</div>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Marvel Studios</li>
										<li class="list-group-item">Desaconselhável para menores de 18 anos.</li>
										<li class="list-group-item">R$ 30,00</li>
									</ul>
									<div class="card-footer text-muted">
										Comprar Agora!
									</div>
								</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<img class="card-img-top" src="img/c3.jpg"/>
								<div class="card-body">
									<h4 class="card-title">The Avengers</h4>
									<h6 class="card-subtitle">HQ nº3</h6>
									<p class="card-text">HQ que narra a história dos Vingadores.</p>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">Marvel Studios</li>
									<li class="list-group-item">Desaconselhável para menores de 18 anos.</li>
									<li class="list-group-item">R$ 30,00</li>
								</ul>
								<div class="card-footer text-muted">
									Comprar Agora!
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-pills justify-content-center mb-4" id="pills-nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">
									Tipos de HQ's
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">
									Livros
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="nav-pills-03" data-toggle="pill" href="#nav-item-03">
									Revistas
								</a>
							</li>
						</ul>
						<div class="tab-content mb-4" id="nav-pills-content">
							<div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/RKJNdjs45VI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>	
									<div class="col-sm-6 col-md-6">
										<p>Marvel Trailler</p>
									</div>	
								</div>
							</div>
							<div class="tab-pane fade" id="nav-item-02" role="tabpanel">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/labT5kIyWuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>	
									<div class="col-sm-6 col-md-6">
										<p>Marvel Trailler 2</p>
									</div>	
								</div>
							</div>
							<div class="tab-pane fade" id="nav-item-03" role="tabpanel">
								Teste 3
							</div>
						</div>
					</div>	
				</div>
			</div>
		<div class="container" id="rodape">
			<div class="form-row">
				<div class="form-group col-6">
					<label for="nome">Insira seu nome:</label>
					<input type="text" class="form-control" id="nome"/>
				</div>
				<div class="form-group col-6">
					<label for="email">Insira seu email:</label>
					<input type="email" class="form-control" id="email"/>
				</div>	
				<div class="form-group">
					<textarea name="mensagem" rows="6" cols="156">
					</textarea>
				</div>
			</div>
		</div>
</body>
</html>

