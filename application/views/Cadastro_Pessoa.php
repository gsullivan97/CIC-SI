<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Cadastros básicos <small>Cadastre uma nova pessoa</small></h3>
			</div>
		</div>

		<div class="clearfix"></div><br />

		<div class="x_panel">
			<div class="x_title">
				<h2>Cadastrar pessoa</h2>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<!-- start form for validation -->
				<form id="demo-form" data-parsley-validate class="form-horizontal form-label-left">
					
					<fieldset>
						<legend>Informações</legend>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nome" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="datanasc">Data de nascimento <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="datanasc" required="required" class="form-control col-md-7 col-xs-12"
								data-inputmask="'mask': '99/99/9999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="email" id="email" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="telefone" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '(99)9999-9999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="select2_single form-control" required>
									<option value="" disabled selected>Escolha uma opção</option>
									<option>Masculino</option>
									<option>Feminino</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nacionalidade">Nacionalidade <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="nacionalidade" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

					</fieldset>

					<fieldset>
						<legend>Local</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rua">Endereço<span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="rua" placeholder="Rua" required="required" class="form-control col-md-7 col-xs-12">
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
								<input type="text" id="numero" placeholder="Nº" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="cep" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999-999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="bairro" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="complemento">Complemento
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="complemento" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<!-- Adicionar opções via banco -->
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Município</label>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<select class="form-control select2_single" required>
									<option value="" disabled selected>Escolha uma opção</option>
									<option>Adicionar opções via banco</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Unidade Federal</label>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<select class="form-control select2_single" required>
									<option value="" disabled selected>Escolha uma opção</option>
									<option>Acre</option>
									<option>Alagoas</option>
									<option>Amapá</option>
									<option>Amazonas</option>
									<option>Bahia</option>
									<option>Ceará</option>
									<option>Distrito Federal</option>
									<option>Espírito Santo</option>
									<option>Goiás</option>
									<option>Maranhão</option>
									<option>Mato Grosso</option>
									<option>Mato Grosso do Sul</option>
									<option>Minas Gerais</option>
									<option>Piauí</option>
									<option>Pará</option>
									<option>Paraíba</option>
									<option>Paraná</option>
									<option>Pernambuco</option>
									<option>Rio de Janeiro</option>
									<option>Rio Grande do Norte</option>
									<option>Rio Grande do Sul</option>
									<option>Rondônia</option>
									<option>Roraima</option>
									<option>Santa Catarina</option>
									<option>São Paulo</option>
									<option>Sergipe</option>
									<option>Tocantins</option>
								</select>
							</div>
						</div>

					</fieldset>	

					<fieldset>
						<legend>Currículo</legend>

						<label for="message">Anexe seu currículo abaixo</label><br /><br />
						<input type="file" name="curriculo" required>
					</fieldset>

					<br/>
					<hr>
					<span class="btn btn-primary">Cadastrar</span>
					<a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

				</form>
				<!-- end form for validations -->

			</div>
		</div>
	</div>
</div>
</div>
<!-- /page content -->

