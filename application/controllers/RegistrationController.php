<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends P_Controller {
  public function __construct()
  {
    parent::__construct();
    if (isset($_SESSION['username'])) {
      redirect(base_url('user/dashboard'));
    }
  }

  public function index()
  {
    date_default_timezone_set('Asia/Kolkata');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', array('is_unique' => 'The %s is already taken'));
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    if ($this->form_validation->run() == FALSE)
    {
       view($this,'account/user/register');
    }else{
      $data = array(
          'name' => $this->input->post('name'),
          'password' => $this->encrypt($this->input->post('password')),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'profile_pic' => "default-profile-pic.png",
          "created_at" => date("Y-m-d H:i:s"),
          "role" => "student"
      );

       if ($this->Add('user',$data)) {
         $this->setMessage("User was registered");
         redirect(base_url("register"));
       }else{
         $this->setErrorMessage("User was not registered");
       }
       $this->load->view('layout/header');
        $this->load->view('account/user/register');
        $this->load->view('layout/footer');
    }

  }

    private function encrypt($password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $hash;
    }

}

?>
