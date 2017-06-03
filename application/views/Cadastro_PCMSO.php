<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastrar PCMSO</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar PCMSO</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_PCMSO'); ?>" method="POST">
                    <label for="tipoexame">Tipo de exame * :</label>
                    <input type="text" id="tipoexame" class="form-control" name="tipoexame" required /><br />
                    <label for="finexames">Finalidade dos exames * :</label>
                    <textarea id="finexames" required class="form-control" name="finexames"></textarea><br />

                    <div class="clearfix"></div>
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
