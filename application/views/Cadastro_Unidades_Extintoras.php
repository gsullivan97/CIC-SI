<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastrar nova Unidade Extintora</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar Unidade Extintora</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate>
                    <label for="id">ID * :</label>
                    <input type="text" id="id" class="form-control" name="id" required /><br />
                    <label for="message">Descrição * :</label>
                    <textarea id="message" required="required" class="form-control" name="message"></textarea><br />
                    <label for="finalidadeUso">Finalidade e Uso * :</label>
                    <input type="text" id="finalidadeUso" class="form-control" name="finalidadeUso" required /><br />
                    <label for="numCert">Número de Certificação * :</label>
                    <input type="text" id="numCert" class="form-control" name="numCert" required /><br />
                    <label for="localInst">Local de Instalação do extintor * :</label>
                    <input type="text" id="localInst" class="form-control" name="localInst" required /><br />
                    <label for="dataCadastro">Data de Cadastro * :</label>
                    <input type="text" id="dataCadastro" class="form-control" name="dataCadastro" required 
                    data-inputmask="'mask': '99/99/9999'"/><br />
                    <label for="validade">Validade * :</label>
                    <input type="text" id="validade" class="form-control" name="validade" required 
                    data-inputmask="'mask': '99/99/9999'"/><br />

                    <br/>
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