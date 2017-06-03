<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastre novos grupos de empresas</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar grupos de empresas</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="cadastro_grupo_empresa" data-parsley-validate action="" method="POST">
                    <label for="descricao">Descrição* (20 chars min, 100 max) :</label>
                    <textarea id="descricao" required="required" class="form-control descricao" name="descricao" 
                              data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                              data-parsley-minlength-message="A descrição precisa ter no mínimo 20 caracteres."
                              data-parsley-maxlength-message="A descrição está muito grande. Precisa ter menos que 100 caracteres."
                              data-parsley-validation-threshold="1"></textarea><br />

                    <div class="clearfix"></div>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" />
                    <a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>
                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->