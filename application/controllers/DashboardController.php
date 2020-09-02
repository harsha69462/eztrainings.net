<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends P_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->library('UploadImage');
    $this->load->library('form_validation');
    $this->username = $this->session->username;
    if (!isset($_SESSION['username'])){
      redirect(base_url('login'));
    }
    $user = $this->GetWhereEmail("user",$_SESSION['username']);
    $user = $user[0];

    if ($user->status === "pending") {
      redirect("account/pending");
    }

  }

  public function index()
  {
    $user = $this->GetWhereEmail('user',$this->session->username);
    $data['user'] = $user[0];
    // pp($user);
    // die('</br/>Stop');
    if (isset($_FILES['profile_pic']['name'])) {

      $config['upload_path']   = 'assets/uploads/profile/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size'] = '1000000';
      $config['max_width']  = '1024000';
      $config['max_height']  = '768000';
      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('profile_pic'))
      {
        $error = array('error' => $this->upload->display_errors());
        $this->setErrorMessage($error['error']);
      }
      else
      {
        $data = array('upload_data' => $this->upload->data());
        $profile_pic =  $data['upload_data']['file_name'];
        $data = array('profile_pic' => $profile_pic);
        $this->UpdateWhereEmail('user',$data,$this->session->username);
        $this->load->view('account/user/layout/header');
        $this->load->view('account/user/dashboard',$data);
        $this->load->view('account/user/layout/footer');
      }
      redirect(base_url('user/dashboard'),"refresh");
    }

    if (isset($_POST['edit_form'])) {
      $fieldData = array();

      foreach ($this->input->post() as $fieldTitle =>$field ) {
        if ($field !== "") {
          $formData = array($fieldTitle => $field);
          $this->UpdateWhereEmail('user',$formData,$this->session->username);
        }
      }
      redirect(base_url('user/dashboard'),'refresh');
    }

    $this->load->view('account/user/layout/header');
    $this->load->view('account/user/dashboard',$data);
    $this->load->view('account/user/layout/footer');
  }

  private function encrypt($password) {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    return $hash;
  }

  public function mycourses()
  {
    $data['timetable'] = array();
    $course = $this->GetCourses();
    $coursesList = array();
    foreach ($course as $courses) {
       $courseName = $this->GetCourseName($courses->course_id);
       foreach ($courseName as $cn) {
          array_push($coursesList,$cn->course);
       }
    }
    $data['coursesList'] = $coursesList;
    $this->load->view('account/user/layout/header');
    $this->load->view('account/user/my-courses',$data);
    $this->load->view('account/user/layout/footer');
  }
  private function GetCourses()
  {
    $user = $this->GetWhereEmail("user",$this->username);
    $user_id = $user[0]->id;
    $result = $this->db->where('user_id',$user_id)->get("user_courses")->result();
    return $result;
  }
  public function GetCourseName($id)
  {
    $course = $this->GetWhere("courses","id",$id);
    return $course;
  }
  private function laodFullStack($data)
  {
    $this->load->view('account/user/courses/full-stack-web-development',$data);
  }

  public function requests()
  {
    date_default_timezone_set('Asia/Kolkata');

    $requests = $this->GetWhereEmail("requests",$this->username);

    if (isset($_POST['request'])) {
      $req = array(
        "email" => $this->username,
        "message" => $this->input->post("message"),
        "created_at" => date("Y-m-d H:i:s")
      );
      $this->Add("requests",$req);
      $this->setMessage("Yaay! Your request has been received");
      redirect("user/requests");
    }
    $data['requests'] = $requests;
    $this->load->view("account/user/layout/header");
    $this->load->view("account/user/requests",$data);
    $this->load->view("account/user/layout/footer");
  }

  public function nofications()
  {
    $notifications = $this->GetWhereEmail("notifications",$this->username);
    $data['notifications'] = $notifications;
    $id = $_SESSION['myuser']['id'];
    $row = $this->db->query("select * from user_courses where user_id='$id'")->result_array();
    $data['registered'] = false;
    for ($i=0; $i < count($row); $i++) {
      if($row[$i]['course_id'] == 3 || $row[$i]['course_id'] == 5 ){
        $data['registered'] = true;
        break;
      }
    }



    $this->load->view("account/user/layout/header");
    $this->load->view("account/user/notifications",$data);
    $this->load->view("account/user/layout/footer");
  }

  public function sessions()
  {
    $data['sessions'] = "";
    $this->load->view("account/user/layout/header");
    $this->load->view("account/user/sessions",$data);
    $this->load->view("account/user/layout/footer");
  }


}




?>
