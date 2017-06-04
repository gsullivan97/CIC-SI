<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cargos/Salários <small>Edite as informações dos funcionários</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Funcionários</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Cargo</th>
                                    <th>Idade</th>
                                    <th>Data Admissão</th>
                                    <th>Salário</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                //var_dump($cargos_salarios);
                                foreach($cargos_salarios as $cargo_salario) {
                                    echo '<tr>
                                        <form action="'.site_url('Main_Controller/Editar_CargosSalarios').'" method="POST">
                                        <input type="hidden" name="codigo" value="'.$cargo_salario->codigo.'" />
                                        <td name="nome">'.$cargo_salario->nome.'</td>
                                        <td name="cargo">'.$cargo_salario->cargo.'</td>
                                        <td name="idade">'.$cargo_salario->idade.'</td>
                                        <td name="data_admissao">'.$cargo_salario->data_admissao.'</td>
                                        <td name="salario">'.$cargo_salario->salario.'</td>
                                        <td><button type="submit" style="border: 0px; background-color: transparent;"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button></td>
                                      </tr>
                                      </form>';
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
