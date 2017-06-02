<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastre um novo funcionário</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar funcionário</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_Cargos'); ?>" method="POST">
                    <label for="nome">Nome * :</label>
                    <input type="text" id="nome" class="form-control" name="nome" required /><br />

                    <label for="cargo">Cargo * :</label>
                    <input type="text" id="cargo" class="form-control" name="cargo" required /><br />

                    <label for="dataAdm">Data de Admissão * :</label>
                    <input type="text" id="dataAdm" class="form-control" name="dataAdm" required 
                    data-inputmask="'mask': '99/99/9999'"/><br />

                    <label for="dataDem">Data de Demissão * :</label>
                    <input type="text" id="dataDem" class="form-control" name="dataDem" required 
                    data-inputmask="'mask': '99/99/9999'"/><br />

                    <label for="banco">Banco * :</label>
                    <input type="text" id="banco" class="form-control" name="banco" required /><br />

                    <label for="agen">Agência * :</label>
                    <input type="text" id="agen" class="form-control" name="agen" required /><br />

                    <label for="conta">Conta * :</label>
                    <input type="text" id="tipo" class="form-control" name="conta" required /><br />

                    <br>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                    <a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

