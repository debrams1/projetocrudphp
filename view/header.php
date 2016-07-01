<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF8">
<title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/estilo.css">


</head>

<body>

	<header>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacao">
						<span class="sr-only">Mostrar/Ocultar menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>

					<a href="#" class="navbar-brand">CRUD PHP + BOOTSTRAP</a>	
				</div>
				<div class="collapse navbar-collapse" id="navegacao">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Produtos <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?c=produto&a=produto">Cadastrar produto</a></li>

							</ul>
						</li>


					</ul>

				</div>

			</div>
		</nav>	

	</header>
