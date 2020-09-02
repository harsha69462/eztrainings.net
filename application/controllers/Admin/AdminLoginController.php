<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLoginController extends P_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

    if (isset($_SESSION['admin'])) {
      redirect(base_url('admin/dashboard'));
    }


  }


  public function index()
  {

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $this->form_validation->set_rules('email',"Email","required");
    $this->form_validation->set_rules('password',"Password","required");
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/login');
    }else {
      $this->checkPassword($email,$password);
      $this->load->view('admin/login');
    }
  }
  private function checkPassword($email,$password)
  {
    $data = $this->GetWhereEmail('admin',$email);
    $hash = "";
    if(!empty($data)){
      $hash = $data[0]->password;
    }
    $match = password_verify($password, $hash);
    if ($match) {
      $this->session->admin =  $email;
      redirect('admin/dashboard','refresh');
    }else{
      $response = "Check the credentials";
      $this->setErrorMessage($response);
      redirect(base_url('admin/login'),"refresh");
    }
  }
}
?>
