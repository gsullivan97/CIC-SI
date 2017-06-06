<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastro de EPI</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar EPI (Equipamento de Proteção Individual)</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url('Main_Controller/Cadastro_EPI'); ?>" method="POST">
					
					<fieldset>
						<legend>Requisitos</legend>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descricao">Descrição do equipamento</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<textarea id="descricao" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="finalidade">Finalidade e Uso do EPI</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<textarea id="finalidade" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="data_de_validade">Data de Validade <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="data_de_validade" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99/99/9999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="data_de_cadastro">Data de Cadastro <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="text" id="data_de_cadastro" required="required" class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '99/99/9999'">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="n_do_certificado">Nº do Certificado  <span class="required">*</span>
							</label>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input type="number" id="n_do_certificado" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>

					</fieldset>

                    <br/>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                    <a href="<?php echo site_url('Main_Controller'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

