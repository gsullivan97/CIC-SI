<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastrar Benefícios</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar Benefícios</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_CNAE'); ?>" method="POST">
                    <label for="nome">Nome * :</label>
                    <input type="text" id="nome" class="form-control" name="nome" required /><br />
                    <label for="percentual">Percentual de desconto * :</label>
                    <input type="number" id="percentual" class="form-control" name="percentual" required /><br />

                    <div class="clearfix"></div>
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
