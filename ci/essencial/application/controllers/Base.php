<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function __construct() 
    {
        parent::__construct(); //1º :: Chamando o construtor da minha base pai. Essa sempre será a base que usaremos para a criação de constrollers
        
    }

	public function index()
	{

	}
}
