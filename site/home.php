	<main>
		<div class="container-fluid">
			
			<div class="row titulo d-flex justify-content-center">
				<p class="h3 p-1">
					Catalogo de Serviços da sua cidade
				</p>
			</div>	
		
			<div class="row busca">

				<div class="busca-texto w-50 m-auto">
					<form action="?pagina=servicos" method="POST">
							<div class="form-inline d-flex">
						<input type="text" class="form-control flex-fill m-1" id="busca" name="busca" placeholder="Diga o que procura?">
						<button type="submit" class="btn btn-primary m-1" id="btn-buscar">
							Buscar
						</button>					    
							</div>					  
					</form>
				</div>
				<div class="busca-grupo w-75 m-auto">
					<div class="busca-titulo d-flex justify-content-center">
						<span class="h3">
							Categorias
						</span>					
					</div>
					<?php
						include_once 'bdphp/conexao.php';

						$sql=$conectar->prepare("SELECT DISTINCT categoria FROM prestadorservico");

						$sql->execute();

						$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
					?>
					<div class="busca-categoria  d-flex justify-content-around">
						<?php
							foreach ($resultado as $vlr) {

								echo "<a href='?cat=".$vlr['categoria']."&pagina=lista'> 
							<span class='h5 cat-itens'>".$vlr['categoria']."</span>
						</a>";								
							}
						?>						
					</div>
				</div>
			</div>		
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
							<div class="carousel-inner">
						<div class="carousel-item active">
								<img src="img/site/slider/slider1.png" class="d-block w-100">
						</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
							</a>
					</div>	
				</div>
			</div>
		</div>
	</main><!-- conteúdo -->