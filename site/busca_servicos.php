	<main>
		<div class="container-fluid">
			<div class="row titulo d-flex justify-content-center">
				<p class="h3 p-1">
					Lista Serviços de Categorias Diversas 					
				</p>
			</div>

			<?php
				include_once 'bdphp/conexao.php';

				$sql=$conectar->prepare("SELECT * FROM prestadorservico WHERE descricao LIKE (:BUSCA)" );

				$busca = "%".$_POST['busca']."%";

				$sql->bindParam(":BUSCA",$busca);

				$sql->execute();

				$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
					
			?>

			<div class="container">				
				<div class="row">
					<?php
		  				foreach ($resultado as $vlr) {

		  					echo "

		  					<div class='col-4' style='margin:10px 0px;' >
			  					<div style='padding: 10px; background-color:  rgba(252,163,17,0.7); border-radius: 10px 10px 0px 0px; margin-top: 10px; text-align: center; font-style: italic; font-weight: bold; font-size: 15px;'>".

			  					"<a href="."?pagina=prestador&id="
			  							.$vlr['id'].
			  						">"
				  						.$vlr['nome'].
				  					"</a>".
			  					"</div>
			  					<div style='height: 80px; overflow-y: auto; background-color: #e5e5e5'>"
			  					.$vlr['descricao'].
			  					"</div>
			  					<div style='padding:10px 0px; border-radius: 0px 0px 10px 10px;background-color:  rgba(20,33,61,0.9); color:white;'> 
			  						<center>
			  							WHATSAPP:"
			  					.$vlr['whatsapp'].
			  							"<a href='https://api.whatsapp.com/send?phone=+55"
			  							.$vlr['whatsapp'].
			  							"&text=Estou precisando de seu serviço, está disponível?'>
			  							<button class='btn btn-outline-warning'>
			  								Solicite o Serviço
			  							</button>
			  							</a> 
			  						</center>
			  					</div>
			  				</div>";
		  				}
		  					
						?>
				</div>
			</div>	
		</div>
	</main><!-- conteúdo -->