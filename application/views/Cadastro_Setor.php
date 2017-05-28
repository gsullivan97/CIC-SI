
<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cadastros básicos <small>Cadastre novos setores</small></h3>
            </div>
        </div>

        <div class="clearfix"></div><br />

        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastrar setor</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <!-- start form for validation -->
              <form id="demo-form" data-parsley-validate>
                <label for="fullname">Nome * :</label>
                <input type="text" id="fullname" class="form-control" name="fullname" required /><br />

                <label>Departamento * :</label>

              <select class="form-control select2_single" required>
                  <option value="" disabled selected>Selecione um departamento</option>
                  <option value="GER">Gerência</option>
                  <option value="GESTQ">Gestão de Qualidade</option>
                  <option value="COM">Comercial</option>
                  <option value="ADM">Administrativo</option>
                  <option value="FIN">Financeiro</option>
                  <option value="PROD">Produção</option>
                  <option value="DESV">Desenvolvimento</option>
              </select>

              <br/>
              <br/>
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