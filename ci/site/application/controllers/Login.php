<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Login_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function process() {
        $this->form_validation->set_rules('username', 'Usuário', 'required');
        $this->form_validation->set_rules('password', 'Senha', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Login_model->getUser($username);

            if ($user && password_verify($password, $user['password'])) {
                $user_data = array(
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($user_data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Credenciais inválidas. Tente novamente.');
                redirect('login');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>
