<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class InterestController extends P_Controller {

  public function __construct()
  {
    parent::__construct();
    if(!isset($_SESSION['last_url'])){
      $_SESSION['last_url'] = $_SERVER['HTTP_REFERER'];
    }

  }


  public function index(){
    // date_default_timezone_set('Asia/Kolkata');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('fname', 'Full Name', 'required');
    $this->form_validation->set_rules('select', 'Option', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');

    if ($this->form_validation->run() !== false){
      $data = array(
        'fullname' => $this->input->post('fname'),
        'course_interested' => $this->input->post('select'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'comment' => $this->input->post('comments'),
      );
      $data = array_filter($data);
      if ($this->Add('interest_form',$data)) {
        $_SESSION['msg_err'] = null;
        $this->session->set_flashdata('success', "Message sent! Our executive will reach out to you soon.");
        redirect($_SESSION['last_url']);
      }else{
        $_SESSION['success'] = null;
        $this->session->set_flashdata('msg_err', "Message not sent");
        redirect($_SESSION['last_url']);
      }
    } else{
      $this->setErrorMessage("Please fill the required details");
      redirect($_SESSION['last_url']);
    }
    redirect($_SESSION['last_url']);

  }
}
