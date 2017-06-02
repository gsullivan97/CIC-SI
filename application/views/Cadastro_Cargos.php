<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cargos/Salários <small>Cadastre novos cargos</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar cargo</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <!-- start form for validation -->
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_Cargos'); ?>" method="POST">
                    <label for="fullname">Nome * :</label>
                    <input type="text" id="fullname" class="form-control" name="fullname" required /><br />

                    <label for="cbo">CBO * :</label>
                    <input type="text" id="cbo" class="form-control" name="cbo" required /><br />

                    <label for="formacaoDes">Formação desejada * :</label>
                    <input type="text" id="formacaoDes" class="form-control" name="formacaoDes" required /><br />

                    <label for="formacaoMin">Formação mínima * :</label>
                    <input type="text" id="formacaoMin" class="form-control" name="formacaoMin" required /><br />

                    <label for="cargaHr">Carga horária * :</label>
                    <input type="text" id="cargaHr" class="form-control" name="cargaHr" required /><br />

                    <label for="salario">Salário * :</label>
                    <input type="text" id="salario" class="form-control" name="salario" required /><br />

                    <label for="tipo">Tipo * :</label>
                    <input type="text" id="tipo" class="form-control" name="tipo" required /><br />

                    <label for="descricao">Descricao * :</label>
                    <input type="text" id="descricao" class="form-control" name="descricao" required /><br />

                    <label for="beneficios">Benefícios * :</label><br>
                    <input type="checkbox" name="transporte" /> Vale transporte <br />
                    <input type="checkbox" name="alimentacao" /> Alimentação <br />
                    <input type="checkbox" name="odontologico" /> Plano odontológico <br />
                    <input type="checkbox" name="saude" /> Plano de saúde <br /> <br>

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

