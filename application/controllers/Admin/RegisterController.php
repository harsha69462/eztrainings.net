<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends P_Controller {


  public function index()
  {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Full Name', "required");
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', array('is_unique' => 'The %s is already taken'));
    $this->form_validation->set_rules('phone', 'Phone', 'required');
    $this->form_validation->set_rules('doj','Doj','required');
    $this->form_validation->set_rules('amount','Amount','required');
    $this->form_validation->set_rules('package','Doj','required');
    $this->form_validation->set_rules('address','Address','required');

    if ($this->form_validation->run() == FALSE)
    {
       views($this,'admin/register');
    }else{
      $data = array(
          'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'doj' => $this->input->post('doj'),
          'amount' => $this->input->post('amount'),
          'package' => $this->input->post('package'),
          'address' => $this->input->post('address'),
          'id_proof' => $this->upload('id_proof'),
          'address_proof' => $this->upload('address_proof')
      );
       if ($this->Add('user',$data)) {
         $this->setMessage("User was registered");
         redirect(base_url("register"));
       }
       views($this,'admin/register');
    }

  }


  public function upload($name)
  {
    if (isset($_FILES[$name]['name'])) {

      $config['upload_path']   = 'assets/uploads/documents/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = '1000000';
      $config['max_width']  = '1024000';
      $config['max_height']  = '768000';
      $this->load->library('upload', $config);

      if (! $this->upload->do_upload($name))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->setErrorMessage($error['error']);
        return "noimage.png";
      }
      else
      {
        $data = array('upload_data' => $this->upload->data());
        return $data['upload_data']['file_name'];
      }
    }
  }

    private function encrypt($password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $hash;
    }

}
?>
