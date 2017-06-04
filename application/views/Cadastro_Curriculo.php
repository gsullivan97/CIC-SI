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
				<form id="formCadCurriculo" data-parsley-validate class="form-horizontal form-label-left">
					
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">CPF <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="cpf" name="cpf" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999.999.999-99'">
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required">*</span>
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
									<option>Pará</option>
									<option>Paraíba</option>
									<option>Paraná</option>
									<option>Pernambuco</option>
									<option>Piauí</option>
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
						<legend>Formação acadêmica</legend>


						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="instituicao">Instituição <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="instituicao"class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="curso">Curso <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="curso" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Estado</label>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<select id="estado" class="form-control select2_single">
									<option value="" disabled selected>Escolha uma opção</option>
									<option value="1">Concluído</option>
									<option value="2">Cursando</option>
									<option value="3">Incompleto</option>
								</select>
							</div>
						</div>

						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
							<button type="button" id="add_formacao_academica" class="btn btn-primary">Adicionar</button>
						</div>

						<div class="x_panel">
							<table id="gridFormacao" class="table table-hover col-md-6 col-sm-6 col-xs-12">
								<thead>
									<tr>
										<td>Instituição</td>
										<td>Curso</td>
										<td>Estado</td>
										<td width="5px;">Deletar</td>
									</tr>
								</thead>
								<tbody id="formacao">
								</tbody>
							</table>
						</div>


					</fieldset>

					<fieldset>
						<legend>Experiência profissional</legend>

<!-- 						<div class="form-group">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="experiencia_profissional" class="form-control col-md-7 col-xs-12">
							</div>
						</div> -->

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa">Empresa <span>*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="empresa" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cargo">Cargo <span>*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="cargo" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="atividade_exercida">Atividade exercida <span>*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="atividade_exercida" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
							<button type="button" id="add_experiencia_profissional" class="btn btn-primary">Adicionar</button>
						</div>

						<div class="x_panel">
							<table id="gridExperiencia" class="table table-hover col-md-6 col-sm-6 col-xs-12">
								<thead>
									<tr>
										<td>Empresa</td>
										<td>Cargo</td>
										<td>Atv. Exercida</td>
										<td width="5px;">Deletar</td>
									</tr>
								</thead>
								<tbody id="experiencias">
								</tbody>
							</table>
						</div>

					</fieldset>

					<fieldset>
						<legend>Outros</legend>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="pretencao_salarial">Pretenção salarial
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="number" id="pretencao_salarial" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Habilitado</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="">
									<label>
										Não <input type="checkbox" class="js-switch" id="habilitado" /> Sim
									</label>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="objetivo">Objetivo(s)
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<textarea id="objetivo" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="informacoes_adicionais">Informações adicionais
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<textarea id="informacoes_adicionais" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>

					</fieldset>

					<br/>
					<hr>
					<input type="submit" class="btn btn-primary" value="Cadastrar">
					<a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

				</form>
				<!-- end form for validations -->

			</div>
		</div>
	</div>
</div>
</div>
<!-- /page content -->

