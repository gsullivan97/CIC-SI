<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cargos/Salários <small>Edite um cargo</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Editar cargo</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate>
                    <label for="nome">Nome * :</label>
                    <input type="text" id="nome" class="form-control" name="nome" value="José Carlos Ribeiro" required disabled /><br />

                    <label for="funcao">Cargo * :</label>
                    <select class="select2_single form-control" required>
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option>Carregar opções aqui</option>
                    </select>

                    <br /><br />
                    <label for="idade">Idade * :</label>
                    <input type="text" id="idade" class="form-control" value="31" name="idade" required disabled/><br />

                    <label for="dataadm">Data Admissão * :</label>
                    <input type="text" id="dataadm" class="form-control" value="10061995" name="dataadm" required disabled 
                    data-inputmask="'mask': '99/99/9999'"/><br />

                    <label for="salario">Salário * :</label>
                    <input type="text" id="salario" class="form-control" name="salario" required /><br />

                    <br/>
                    <span class="btn btn-primary">Salvar</span>
                    <a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

