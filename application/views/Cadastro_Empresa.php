<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastre uma nova empresa</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar empresas</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('Main_Controller/Cadastro_Empresa'); ?>" method="POST">
					
					<fieldset>
						<legend>Informações</legend>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="razao-social">Razão Social <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="razao-social" name="razaoSocial" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome-fantasia">Nome Fantasia <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="nome-fantasia" name="nomeFantasia" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Natureza Juridica</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
                                                            <select class="select2_single form-control" name="naturezaJuridica">
									<option disabled="disabled" selected="selected">Escolha uma opção</option>
                                                                        <option value="Órgão Público do Poder Executivo Federal">Órgão Público do Poder Executivo Federal</option>
									<option value="Órgão Público do Poder Executivo Estadual ou do Distrito Federal">Órgão Público do Poder Executivo Estadual ou do Distrito Federal</option>
									<option value="Órgão Público do Poder Executivo Municipal">Órgão Público do Poder Executivo Municipal</option>
									<option value="Órgão Público do Poder Legislativo Federal">Órgão Público do Poder Legislativo Federal</option>
									<option value="Órgão Público do Poder Legislativo Estadual ou do Distrito Federal">Órgão Público do Poder Legislativo Estadual ou do Distrito Federal</option>
									<option value="Órgão Público do Poder Legislativo Municipal">Órgão Público do Poder Legislativo Municipal</option>
									<option value="Órgão Público do Poder Judiciário Federal">Órgão Público do Poder Judiciário Federal</option>
									<option value="Órgão Público do Poder Judiciário Estadual">Órgão Público do Poder Judiciário Estadual</option>
									<option value="Autarquia Federal">Autarquia Federal</option>
									<option value="Autarquia Estadual ou do Distrito Federal">Autarquia Estadual ou do Distrito Federal</option>
									<option value="Autarquia Municipal">Autarquia Municipal</option>
									<option value="Fundação Federal">Fundação Federal</option>
									<option value="Fundação Estadual ou do Distrito Federal">Fundação Estadual ou do Distrito Federal</option>
									<option value="Fundação Municipal">Fundação Municipal</option>
									<option value="Órgão Público Autônomo Federal">Órgão Público Autônomo Federal</option>
									<option value="Órgão Público Autônomo Estadual ou do Distrito Federal">Órgão Público Autônomo Estadual ou do Distrito Federal</option>
									<option value="Órgão Público Autônomo Municipal">Órgão Público Autônomo Municipal</option>
									<option value="Comissão Polinacional">Comissão Polinacional</option>
									<option value="Fundo Público">Fundo Público</option>
									<option value="Associação Pública">Associação Pública</option>
								</select>
							</div>
						</div>
	
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefone">Telefone<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="telefone" name="telefone" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '(99)9999-9999'">
							</div>
						</div>

					</fieldset>

					<fieldset>
						<legend>Local</legend>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rua">Endereço<span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
                                                            <input type="text" id="rua" placeholder="Rua" name="rua" required="required" class="form-control col-md-7 col-xs-12">
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12">
                                                            <input type="text" id="numero" placeholder="Nº" name="numero" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
                                                            <input type="text" id="cep" required="required" name="cep" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99999-999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
                                                            <input type="text" id="bairro" required="required" name="bairro" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="complemento">Complemento <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
                                                            <input type="text" id="complemento" required="required" name="complemento" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

						<!-- Adicionar opções via banco -->
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Município</label>
							<div class="col-md-4 col-sm-4 col-xs-4">
                                                            <select class="form-control select2_single" name="municipio">
									<option disabled="disabled" selected="selected">Escolha uma opção</option>
									<option>Adicionar opções via banco</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Unidade Federal</label>
							<div class="col-md-4 col-sm-4 col-xs-4">
                                                            <select class="form-control select2_single" name="unidadeFederal">
									<option disabled="disabled" selected="selected">Escolha uma opção</option>
									<option name="Acre">Acre</option>
									<option name="Alagoas">Alagoas</option>
									<option name="Amapá">Amapá</option>
									<option name="Amazonas">Amazonas</option>
									<option name="Bahia">Bahia</option>
									<option name="Ceará">Ceará</option>
									<option name="Distrito Federal">Distrito Federal</option>
									<option name="Espírito Santo">Espírito Santo</option>
									<option name="Goiás">Goiás</option>
									<option name="Maranhão">Maranhão</option>
									<option name="Mato Grosso">Mato Grosso</option>
									<option name="Mato Grosso do Sul">Mato Grosso do Sul</option>
									<option name="Minas Gerais">Minas Gerais</option>
									<option name="Piauí">Piauí</option>
									<option name="Pará">Pará</option>
									<option name="Paraíba">Paraíba</option>
									<option name="Paraná">Paraná</option>
									<option name="Pernambuco">Pernambuco</option>
									<option name="Rio de Janeiro">Rio de Janeiro</option>
									<option name="Rio Grande do Norte">Rio Grande do Norte</option>
									<option name="Rio Grande do Sul">Rio Grande do Sul</option>
									<option name="Rondônia">Rondônia</option>
									<option name="Roraima">Roraima</option>
									<option name="Santa Catarina">Santa Catarina</option>
									<option name="São Paulo">São Paulo</option>
									<option name="Sergipe">Sergipe</option>
									<option name="Tocantins">Tocantins</option>
								</select>
							</div>
						</div>

					</fieldset>	

					<fieldset>
						<legend>Identificação</legend>
						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="id_cnae">ID CNAE: </label>
	                        <input type="text" name="id_cnae" placeholder="ID CNAE" data-inputmask="'mask': '9999-9/99'" class="form-control">
	                    </div>
						
						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="id_departamento">ID Departamento: </label>
	                        <input type="text" name="id_departamento" placeholder="ID departamento" class="form-control">
	                    </div>

						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="id_setor">ID Setor: </label>
	                        <input type="text" name="id_setor" placeholder="ID setor" class="form-control">
	                    </div>
						
	                    <div class="clearfix"></div>

						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="id_centro_de_custo">ID Centro de custo: </label>
	                        <input type="text" name="id_centro_de_custo" placeholder="ID centro de custo" class="form-control">
	                    </div>

						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="id_grupo_empresa">ID Grupo Empresa: </label>
	                        <input type="text" name="id_grupo_empresa" placeholder="ID grupo empresa" class="form-control">
	                    </div>

						<div class="col-md-4 col-sm-12 col-xs-12 form-group">
							<label for="cnpj">CNPJ: </label>
	                        <input type="text" name="cnpj" placeholder="CNPJ" class="form-control" data-inputmask="'mask': '99.999.999/9999-99'">
	                    </div>	
					</fieldset>

					<fieldset>
						<legend>Outros</legend>

						<label for="message">Descrição (20 chars min, 100 max) :</label>
						<textarea id="message" required class="form-control" name="message" 
						          data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
						          data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
						          data-parsley-validation-threshold="10"></textarea>
					</fieldset>

                    <br/>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                    <a href="<?php echo site_url('Main_Controller/Cadastro_Empresa'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

