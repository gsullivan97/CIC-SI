<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        protected $data = array(); 
         
	public function index()
	{
            $this->render('MainPage','Template');
            //$this->load->view('Template/master_header_view');
	}
        
        public function Cadastro()
	{
            $this->render('Cadastro','Template');
	}
        
        public function Cargos_Salarios()
	{
            $this->render('Cargos_Salarios','Template');
	}
        
        public function Cadastro_Cargos()
	{
            $this->render('Cadastro_Cargos','Template');
	}

        public function Login()
    {
            $this->load->view('Login');
    }
        
        public function render($the_view, $template)
        {
            if(is_null($template))
            {
                $this->load->view($the_view,$this->data);
            }
            else
            {
                /*
                $this->data['the_view_content'] = (is_null($the_view)) ? '' : $the_view;
                $this->data['the_view_data'] = $this->data;
                $this->data['the_view_true'] = TRUE;
                */
                $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
                $this->load->view($template.'/master_view', $this->data);
            }
        }
}
