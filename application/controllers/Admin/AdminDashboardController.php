<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboardController extends P_Controller {

  private $current_year = 2020;

  public function __construct()
  {
    parent::__construct();
    $this->current_year = 2020;
    $this->load->library('form_validation');
    if (!isset($_SESSION['admin'])) {
      redirect(base_url('/'));
    }
  }


  public function index()
  {

    if (isset($_POST['activate'])) {
      $userId = $this->input->post("activate_member");
      $data = array(
        "status" => "activated"
      );
      $this->UpdateWhereId("user",$data,$userId);
      $this->setMessage("User has been activated");
      redirect('admin/dashboard');
    }
    if (isset($_POST['delete_member'])) {
      $userId = $this->input->post("delete_member");
      $this->DeleteWhereId("user",$userId);
      $this->setMessage("User has been deleted");
      redirect('admin/dashboard');
    }

    $data['all'] = $this->GetAll('user');

    $this->load->view("admin/layout/header",$data);
    $this->load->view("admin/dashboard",$data);
    $this->load->view("admin/layout/footer",$data);
  }

  public function addComment()
  {

    // if (isset($_POST['notification'])) {
    //   $req = array(
    //     "email" => $this->username,
    //     "message" => $this->input->post("message"),
    //     "created_at" => date("Y-m-d H:i:s")
    //   );
    //   $this->Add("notification",$req);
    //   $this->setMessage("Your request has been recieved");
    //   redirect("user/requests");
    // }
    // $this->load->view("admin/layout/header",$data);
    // $this->load->view("admin/requests",$data);
    // $this->load->view("admin/layout/footer",$data);
  }

  public function requests()
  {
    $this->db->order_by("id","desc");
    $requests = $this->GetAll("requests");


    $data['requests'] = $requests;

    $this->load->view("admin/layout/header",$data);
    $this->load->view("admin/requests",$data);
    $this->load->view("admin/layout/footer",$data);
  }

}
?>
