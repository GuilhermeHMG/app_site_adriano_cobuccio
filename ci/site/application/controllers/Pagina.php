<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); // Carrega o helper 'url'
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
            // Página não encontrada
            show_404();
        }

        $this->load->view($page);
    }
}
