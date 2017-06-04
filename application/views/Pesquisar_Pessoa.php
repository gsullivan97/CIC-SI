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

                            <div class="clearfix"></div><br />
                            <button class="btn btn-primary" style="margin-left: 10px;" type="submit">Pesquisar</button>
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
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td name="codigo">1</td>
                                    <td name="nome">Samuel Henrique</td>
                                    <td name="cpf">164.653.123-60</td>
                                    <td name="email">samuel.rizzon@gmail.com</td>
                                </tr>
                                <tr>
                                    <td name="codigo">2</td>
                                    <td name="nome">Greg Sullivan</td>
                                    <td name="cpf">155.335.253-54</td>
                                    <td>gregls@gmail.com</td>
                                </tr>
                                <tr>
                                    <td name="codigo">3</td>
                                    <td name="nome">Marcos Magno</td>
                                    <td name="cpf">763.672.136-25</td>
                                    <td>marcos.magno@gmail.com</td>
                                </tr>
                                <tr>
                                    <td name="codigo">4</td>
                                    <td name="nome">Kassandra</td>
                                    <td name="cpf">155.335.253-50</td>
                                    <td>kassandra@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
