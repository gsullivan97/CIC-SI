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
                <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Altera_Status'); ?>" method="POST">
                    
                    <input type="hidden" id="codigo"  name="codigo" value="<?php echo $alteraPessoa[0]->codigo ?>" readonly="readonly"/>
                    <label for="nome" >Nome * :</label>
                    <input type="text" id="nome" name="nome" class="form-control" readonly="readonly" value="<?php echo $alteraPessoa[0]->nome ?>"/><br />
                    <label for="percentual">Status * :</label>
                    <select class="select2_single form-control" name="status" required onchange="showDiv(this)">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="Pessoa" <?php if($alteraPessoa[0]->status=='Pessoa'){echo 'selected';}?> >Pessoa</option>
                        <option value="Candidato" <?php if($alteraPessoa[0]->status=='Candidato'){echo 'selected';}?> >Candidato</option>
                        <option value="Funcionário" <?php if($alteraPessoa[0]->status=='Funcionário'){echo 'selected';}?> >Funcionário</option>
                    </select>

                    <br /><br />

                    <div id="pay_block" style="display:none;">
                            <label for="cargo">Cargo * :</label>
                            <input type="text" id="cargo" class="form-control" name="cargo" value="<?php echo $alteraPessoa[0]->cargo ?>" required /><br />

                            <label for="dataAdm">Data de Admissão * :</label>
                            <input type="text" id="dataAdm" class="form-control" name="dataAdm" required 
                            data-inputmask="'mask': '99/99/9999'" value="<?php echo $alteraPessoa[0]->data_admissao ?>"/><br />

                            <label for="dataDem">Data de Demissão * :</label>
                            <input type="text" id="dataDem" class="form-control" name="dataDem" required 
                            data-inputmask="'mask': '99/99/9999'" value="<?php echo $alteraPessoa[0]->data_demissao ?>"/><br />

                            <label for="banco">Banco * :</label>
                            <input type="text" id="banco" class="form-control" name="banco" required value="<?php echo $alteraPessoa[0]->banco ?>"/><br />

                            <label for="agen">Agência * :</label>
                            <input type="text" id="agen" class="form-control" name="agencia" required value="<?php echo $alteraPessoa[0]->agencia ?>"/><br />

                            <label for="conta">Conta * :</label>
                            <input type="text" id="tipo" class="form-control" name="conta" required value="<?php echo $alteraPessoa[0]->conta ?>"/><br />
                       
                    </div> 

                    <button class="btn btn-primary" type="submit" id="alterar_status">Alterar status</button>
                    <a href="<?php echo site_url('Main_Controller/Pesquisar_Pessoa'); ?>" class="btn btn-primary">Cancelar</a>
                </form>
                <!-- end form for validations -->
            </div>    
        </div>
    </div>
</div>
</div>
</div>
<!-- /page content -->
