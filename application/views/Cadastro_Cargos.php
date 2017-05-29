<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
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
                    <label for="heard">Tipo *:</label>
                    <select class="form-control select2_single" required>
                        <option value="" disabled selected>Escolha uma opção..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select><br/><br/>

                    <label for="message">Descrição (20 chars min, 100 max) :</label>
                    <textarea id="message" required="required" class="form-control" name="descricao" 
                              data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                              data-parsley-minlength-message="Você precisa digitar no mínimo 20 caracteres"
                              data-parsley-validation-threshold="10"></textarea><br />

                    <br/>
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

