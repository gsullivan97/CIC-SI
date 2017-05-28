<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo site_url('Main_Controller/index'); ?>" class="site_title"><i class="fa fa-users"></i> <span>Smart Work's</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo site_url('assets/images/img.jpg') ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo site_url('Main_Controller/index'); ?>"><i class="fa fa-home"></i> Home </a></li>
                    <li><a><i class="fa fa-edit"></i> Cadastros Básicos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro'); ?>">Cadastrar Pessoa</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro_CNAE'); ?>">Cadastrar CNAE</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro_Empresa'); ?>">Cadastrar Empresa</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro_Grupo_Empresa'); ?>">Cadastrar Grupo Empresa</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Centro_Custo'); ?>">Cadastrar Centro Custo</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro_Setor'); ?>">Cadastrar Setor</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-desktop"></i>Treinamentos </a></li>
                    <li><a href="#"><i class="fa fa-sitemap"></i>Recrutamento </a></li>
                    <li><a><i class="fa fa-table"></i> Cargos/Salários <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo site_url('Main_Controller/Cargos_Salarios'); ?>">Cargos, Salários e Benefícios</a></li>
                            <li><a href="<?php echo site_url('Main_Controller/Cadastro_Cargos'); ?>">Cadastrar Cargos</a></li>
                            <li><a href="#">Cadastrar Salários</a></li>
                            <li><a href="#">Cadastrar Benefícios</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-bar-chart-o"></i> Departamento Pessoal</a></li>
                    <li><a href="#"><i class="fa fa-shield"></i>Segurança</a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>
