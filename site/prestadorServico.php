	<main>
		<div class="container-fluid">
			<div class="row titulo d-flex justify-content-center">
				<p class="h3 p-1">
					Vitrine do Prestador 
					<?php
						
					?>
				</p>
			</div>
			<?php
				include_once 'bdphp/conexao.php';

				$sql=$conectar->prepare("SELECT * FROM prestadorservico WHERE id = (:ID)");

				$id = $_GET['id'];

				$sql->bindParam(":ID",$id);

				$sql->execute();

				$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
			?>

			<div class="container">				
				<div class="row">
						<!--
					<div class="card col-4" style="width: 30rem;">
					
		  				<img src="..." class="card-img-top" alt="...">

		  				-->
		  				<div class="col-3 d-flex flex-column justify-content-around" style="border: 2px solid gray; border-radius: 10px 0px 0px 10px;">
		  					<span style="font-weight: bold; color: red; font-size: 25px; text-shadow: 10px;">
		  						<?php
		  							foreach ($resultado as $vlr) {
		  								echo $vlr['nome'];
		  							}
		  						?>
		  					</span>

		  					<blockquote style="font-style: italic;">
		  						<?php
		  							foreach ($resultado as $vlr) {
		  								echo $vlr['descricao'];
		  							}
		  						?>		  						
		  					</blockquote>
		  					
		  				</div>
		  				<div class="col-9" style="border: 2px solid gray; border-radius: 0px 10px 10px 0px;">
		  					<table class="table table-striped">
		  						<thead>
		  							<tr>
		  								<center>
		  									Outras informações do Prestador de Serviço	
		  								</center>
		  							</tr>
		  						</thead>
		  						<tbody>
		  							<tr>
		  								<td>
		  									Categoria do Serviço
		  								</td>
		  								<td>
		  									<?php
					  							foreach ($resultado as $vlr) {
					  								echo $vlr['categoria'];
					  							}
					  						?>
		  								</td>
		  							</tr>
		  							<tr>
		  								<td>
		  									Endereço 
		  								</td>
		  								<td>
		  									<?php
					  							foreach ($resultado as $vlr) {
					  								echo $vlr['endereco'];
					  							}
					  						?>
		  								</td>
		  							</tr>
		  							<tr>
		  								<td>
		  									Cidade 
		  								</td>
		  								<td>
		  									<?php
					  							foreach ($resultado as $vlr) {
					  								echo $vlr['cidade'];
					  							}
					  						?>
		  								</td>
		  							</tr>
		  							<tr>
		  								<td>
		  									Estado
		  								</td>
		  								<td>
		  									<?php
					  							foreach ($resultado as $vlr) {
					  								echo $vlr['estado'];
					  							}
					  						?>
		  								</td>
		  							</tr>
		  						</tbody>

		  						
		  					</table>
		  				</div>
				<!--
				</div>			
			-->
			</div>	
		</div>
	</main><!-- conteúdo -->