<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastrar novo CNAE</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar CNAE</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_CNAE'); ?>" method="POST">
                    <label for="codigo">Código * :</label>
                    <input type="text" id="codigo" class="form-control" name="codigo" required /><br />
                    <label for="message">Descrição (20 chars min, 100 max) :</label>
                    <textarea id="message" required="required" class="form-control" name="message" 
                              data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                              data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"></textarea><br />

                    <div class="clearfix"></div>
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
