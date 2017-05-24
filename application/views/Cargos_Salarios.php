<!-- page content -->
<div class="right_col" role="main" style="height: 0px;">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Cargos/Salários <small>Edite as informações dos funcionários</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-4 col-sm-5 col-xs-12 pull-right">
                    <a href="<?php echo site_url('Main_Controller/Cadastro_Cargos'); ?>" class="btn btn-primary btn-sm">Cadastrar novo cargo</a>
                </div>
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
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                for ($i = 1; $i <= 30; $i++) {
                                    echo '<tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td><a href="#"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
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
