<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left" style="width: 100%">
                <h3>Alterar Status  <small>Altera status de uma pessoa/candidato/funcionário</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Alterar status </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Altera_Status_Pessoa'); ?>" method="POST">
                    <label for="nome">Nome * :</label>
                    <input type="text" id="nome" disabled class="form-control" name="nome" /><br />
                    <label for="percentual">Status * :</label>
                    <select class="select2_single form-control" required>
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Pessoa">Pessoa</option>
                                    <option value="Candidato">Candidato</option>
                                    <option value="Funcionário">Funcionário</option>
                                </select>

                    <br /><br />
                    <button class="btn btn-primary" type="submit">Alterar status</button>
                    <a href="<?php echo site_url('Main_Controller'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->
