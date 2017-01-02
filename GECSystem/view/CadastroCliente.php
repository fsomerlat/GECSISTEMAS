<?php require_once 'header/header.php';?>

			<div class="row">	
				<h1 class="h1">Cadastro de clientes TESTE</h1>
				<form action="" name="form1" id="form1">
					<div class="col-md-2">
						<div class="form-group">
							<label for="Nome">Nome</label>
								<input type="text" name="cpNome" id="cpNome" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="Cep">Cep</label>
								<input type="text" name="cpCep" id="cpCep" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="rua">Rua</label>
								<input type="text" name="cpRua" id="cpRua" readonly class="form-control loading toClear" />
						</div>
					</div>	
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="bairro">Bairro</label>
								<input type="text" name="cpBairro" id="cpBairro" readonly class="form-control loading toClear" />
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="Cidade">Cidade</label> 
								<input type="text" name="cpCidade" id="cpCidade" readonly class="form-control loading toClear" />
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="Estado">Estado</label>
								<input type="text" name="cpUf" id="cpUf" readonly class="form-control loading toClear"/>
						</div>
					</div>
					
					<div class="col-md-2">
						<div class="form-group">
							<label for="Pais">Pais</label>
								<input type="text" name="cpPais" id="cpPais" readonly class="form-control" value="Brasil"/>
						</div>
					</div>						
					
					<div class="col-md-3">
						<div class="form-group">
							<label for="Email">Email</label>
								<input type="text" name="cpEmail" id="cpEmail" class="form-control" />
						</div>
					</div>					
					
					<div class="col-md-3">
						<div class="form-group">
							<label for="Telefone">Telefone</label>
								<input type="text" name="cpTelefone" id="cpTelefone" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label for="Site">Site</label>
								<input type="text" name="cpSite" id="cpSite" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-info form-control btnClass">cadastrar</button>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<button type="reset" name="btnLimpar" id="btnLimpar" class="btn btn-danger form-control btnClass">limpar</button>
						</div>
					</div>										
				</form>
		</div>
		
<?php require_once 'footer/footer.php'; ?>
