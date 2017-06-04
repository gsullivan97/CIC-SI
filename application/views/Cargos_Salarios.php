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
                                for ($i = 1; $i <= 30; $i++) {
                                    echo '<tr>
                        <td name="nome">Tiger Nixon</td>
                        <td name="cargo">System Architect</td>
                        <td name="idade">61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><a href="Editar_CargosSalarios"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
                      </tr>';
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
