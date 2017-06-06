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
                <form id="" data-parsley-validate action="<?php echo site_url('Main_Controller/Atualiza_CargosSalarios'); ?>" method="POST">

                    <input type="hidden" name="codigo" value="<?php echo $cargo_salario[0]->codigo; ?>" />
                    <label for="nome">Nome * :</label>
                    <input type="text" id="nome" class="form-control" name="nome" value="<?php echo $cargo_salario[0]->nome; ?>" required  readonly="readonly"/><br />

                    <label for="funcao">Cargo * :</label>
                    <select class="select2_single form-control" name="cargo" required>
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option selected><?php echo $cargo_salario[0]->cargo; ?></option>
                        <option>Carregar opções aqui</option>
                    </select>

                    <br /><br />
                    <label for="idade">Idade * :</label>
                    <input type="text" id="idade" class="form-control" value="<?php echo $cargo_salario[0]->idade; ?>" name="idade" required readonly="readonly"/><br />

                    <label for="dataadm">Data Admissão * :</label>
                    <input type="text" id="dataadm" class="form-control" value="<?php echo $cargo_salario[0]->data_admissao; ?>" name="dataadm" required readonly="readonly" 
                    data-inputmask="'mask': '99/99/9999'"/><br />

                    <label for="salario">Salário * :</label>
                    <input type="text" id="salario" class="form-control" value="<?php echo $cargo_salario[0]->salario; ?>" name="salario" required /><br />

                    <br/>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>" class="btn btn-primary">Cancelar</a>

                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

