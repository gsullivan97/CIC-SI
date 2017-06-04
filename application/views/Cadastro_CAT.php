<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastrar CAT</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar CAT</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <!-- start form for validation -->
                <form id="" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_CAT'); ?>" method="POST">
                    <label for="carac">Característica do acidente * :</label>
                    <input type="text" id="carac" class="form-control" name="carac" required /><br />
                    <label for="dataabert">Data de abertura * :</label>
                    <input type="text" id="dataabert" name="dataabert" class="form-control" required="required" data-inputmask="'mask': '99/99/9999'"><br />
                    <label for="registrocat" style="padding-right: 20px;">Registro de CAT * :</label>
                    Não <input type="checkbox" class="js-switch" id="registrocat" name="registrocat" /> Sim

                    <br /><br />
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
