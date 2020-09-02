<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends P_Controller {

  public function __construct()
  {
    parent::__construct();
    if (isset($_SESSION['username'])) {
      redirect(base_url('user/dashboard'));
    }

  }

  public function index()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('layout/header');
      $this->load->view('account/user/login');
      $this->load->view('layout/footer');
    }else {
      $this->checkPassword($email, $password);
    }
  }


  private function checkPassword($email, $password) {
    $hash = "";
    $data = $this->GetWhereEmail('user', $email);
    if (!empty($data)) {
      $hash = $data[0]->password;
    }
    $match = password_verify($password, $hash);
    if ($match) {
      $this->session->username = $email;
      $user = $this->db->query("select * from user where email='$email'")->result_array();
      $user = $user[0];
      $_SESSION['myuser'] = $user;
      

      redirect(base_url('user/dashboard'));

    } else {
      $this->setErrorMessage("Check the credentials");
      redirect(base_url('login'));
    }
  }

}
?>
