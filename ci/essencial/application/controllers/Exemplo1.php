<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

    public function __construct() 
    {
        parent::__construct(); 
        $this->load->model('Exemplo1_model', 'e1_model');
    }

	public function index()
	{
        echo 'Executado método index do controller';
	}

    public function login()
    {
        $this->e1_model->salvar();
    }
}
