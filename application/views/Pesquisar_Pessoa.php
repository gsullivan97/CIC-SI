<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Pesquisar pessoa</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- start form for validation -->
                        <form id="demo-form" data-parsley-validate action="<?php echo site_url('Main_Controller/Cadastro_CNAE'); ?>" method="POST">

                            <div class="col-md-3 col-sm-12 col-xs-12 form-group" data-column="0">
                                <label for="cod">Código pessoa: </label>
                                <input type="text" id="col0_filter" class="form-control column_filter">
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12 form-group" data-column="1">
                                <label for="nome_filter">Nome: </label>
                                <input type="text" id="col1_filter" class="form-control column_filter">
                            </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 form-group" data-column="2">
                                <label for="cpf">CPF: </label>
                                <input type="text" id="col2_filter" class="form-control column_filter" 
                                >
                            </div>

                            <div class="clearfix"></div>
                            * A pesquisa acontece em tempo real, conforme a digitação nos campos acima.
                        </form>
                        
                        <!-- end form for validations -->
                    </div>
                    <div class="clearfix"></div><br />
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php //var_dump($Pessoas); 
                                foreach ($Pessoas as $pessoa){
                                echo 
                                ('<tr>
                                    <form action="'.site_url('Main_Controller/Altera_Status_Pessoa').'" method="POST">
                                    <td name="codigo"><input type="hidden" name="codigo" value="'.$pessoa->codigo.'" /> '.$pessoa->codigo.' </td>
                                    <td name="nome">'.$pessoa->nome.' </td>
                                    <td name="cpf">'.$pessoa->cpf.'</td>
                                    <td name="email">'.$pessoa->email.'</td>
                                    <td name="status">'.$pessoa->status.' </td>
                                    <td><button type="submit" style="border: 0px; background-color: transparent;"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button></td>
                                    </form>
                                </tr>');
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
