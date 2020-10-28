<main>
		<div class="container-fluid">
			
			<div class="row titulo d-flex flex-column justify-content-center align-content-center">
				<p class="h3">
					Cadastro
				</p>				
				<p class="h4">
					Empresa ou Profissional de Prestação de Serviços
				</p>
			</div>
		</div>
		<div class="container-fluid cadastro">
			<div class="row">
				<div class="col-3 img-cadastro">
					<div class="d-flex flex-column justify-content-around">
						<blockquote>
							<p class="h3 m-1 text-white text-capitalize text-center" >
								
							</p>
						</blockquote>
						
					</div>
				</div>
				<div class="col-9 p-2">
					<form action="bdphp/inserir.php" method="POST" enctype="multipart/form-data" accept-charset="UTF-8" class="form-cadastro p-2">
                            <div class="form-row">
                              <!--
                                <div class="form-group col-md-6">
                                 <div class="dropzone dpzone">

          							          <div class="banner-container">
          							          <img class="thumb" src="" style="width:135px !important">
          							          </div>
          							          <div class="dz-default dz-message">
          							          	
          											  <p class="text def tt-company"><b><input type="file" name="imageLogo" class="company-image file_validate" id="banner-upload" accept="image/*">Clique aqui</b> para fazer upload de seu logotipo.</p>
          								            <p class="text def tt-company">Sua marca será exibida no resultado de busca e na página da sua empresa.</p>
          								        
                        						 </div>
              							        </div>
              							      </div>
                                  -->
                                		
                                <div class="form-group col-md-12">
                                  <label for="">Nome do Prestador de Serviço</label>
                                  <input type="text" class="form-control mt-1" id="" placeholder="" name="nome" required="">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control mt-1" id="" placeholder="" name="email">
                                </div>
                                
                            </div>   
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="">Telefone Fixo</label>
                                  <input type="text" class="form-control mt-1 phoneNumber" name="telefone" id="" placeholder="(00) 0000-0000" maxlength="11">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Whatsapp da Empresa</label>
                                    <input type="text" class="form-control mt-1 phoneNumber" name="whatsapp" id="" placeholder="(00) 00000-0000" maxlength="11">
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="">CPF/CNPJ</label>
                                  <input type="text" class="form-control mt-1 cnpj_cpf" name="cpfcnpj" maxlength="18">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Website</label>
                                    <input type="url" class="form-control mt-1" name="website" placeholder="https://www.exemplo.com">
                                </div>
                            </div>

                             <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">Categoria</label>
                                    <select id="categorias" class="form-control mt-1 cb-advertise-segment" name="categoria">
                                        <option>Selecione</option>
  									  	<option value="Casa" data-id="1" class="type-cash">Casa</option>
  									  	<option value="Veiculos" data-id="2" class="type-cash">Veiculos</option>
  									  	<option value="Lazer" data-id="3" class="type-cash">Lazer</option>
  									  	<option value="Beleza" data-id="4" class="type-cash">Beleza</option>
  									  	<option value="Saúde" data-id="5" class="type-cash">Saúde</option>									  	
                                      </select>
                                </div>
                                <div class="form-group col-md-8">
	                              <label for="">Descrição do Serviço oferecido</label>
	                              <textarea class="form-control mt-1" name="descricao" id="descricao" rows="2" required=""></textarea>
	                            </div>
                              
                              </div>	                            
                              
                              <div class="form-row">
                              <div class="form-group col-md-3">
                                <label for="">CEP</label>
                                <input name="cep" id="cep" type="text" class="form-control mt-1" maxlength="9" autocomplete="off">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="">Estado</label>
                                <input type="text" id="" class="form-control mt-1" name="estado">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="">Cidade</label>
                                <input name="cidade" type="text" class="form-control mt-1">
                              </div>                              
                               <div class="form-group col-md-3">
                                <label for="">Bairro</label>
                                 <input name="bairro" type="text" class="form-control mt-1">
                              </div>                              
                            </div>
                            <div class="form-row">  
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Endereço</label>
                                <input name="endereco" type="text" class="form-control mt-1">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Número</label>
                                <input name="nro" type="text" class="form-control mt-1" id="">
                              </div>
                            </div>                          
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary w-50 submit_button">Cadastrar <i class="fa fa-arrow-right text-white" aria-hidden="true"></i></button>
                            </div>
                         </form>
				</div>
			</div>
		</div>
	</main><!-- conteúdo -->