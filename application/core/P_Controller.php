<?php



class P_Controller extends CI_Controller
{

  function __construct(){
    parent::__construct();
  }

  function GetAll($table)
  {
    return $this->db->get($table)->result();
  }


  function Add($table,$data)
  {
    return $this->db->insert($table,$data);
  }

  function UpdateWhereId($table,$data,$id)
  {
    $this->db->where('id', $id);
    $this->db->update($table,$data);
  }
  function UpdateWhereEmail($table,$data,$email)
  {
    $this->db->where('email', $email);
    $this->db->update($table,$data);
  }

  function UpdateData($table,$data)
  {
    return $this->db->update($table,$data);
  }


  function DeleteWhereId($table,$id)
  {
    $this->db->where('id', $id);
    $this->db->delete($table);
  }

  function GetWhere($table,$col,$val)
  {
    $this->db->where($col,$val);
    return $this->db->get($table)->result();
  }
  function GetWhereEmail($table,$email)
  {
    $this->db->where('email',$email);
    return $this->db->get($table)->result();
  }
  function GetWhereId($table,$id)
  {
    $this->db->where('id',$id);
    return $this->db->get($table)->result();
  }

  public function setMessage($message)
  {
    $this->session->set_flashdata('success', $message);
  }
  public function setErrorMessage($message)
  {
    $this->session->set_flashdata('error', $message);
  }
}


function checkLoggedIn($user,$routes)
{
    foreach ($routes as $route => $redirect) {
      if (!isset($_SESSION[$user]) && strpos($_SERVER['REQUEST_URI'], $route) !== false) {
        redirect($redirect,"refresh");
      }
    }
}

function json($response){
    return json_encode($response);
}
function view($p,$page)
{
 $p->load->view('layout/header');
 if ($page) {
   $p->load->view($page);
 }
 $p->load->view('layout/footer');
}
function views()
{
  $params = func_get_args();
  if (count($params)<3) {
    $p = $params[0];
    $page = $params[1];
    $p->load->view('layout/header');
    if ($page) {
      $p->load->view($page);
    }
    $p->load->view('layout/footer');
  }else{
    $p = $params[0];
    $page = $params[1];
    $data = $params[2];
    $p->load->view('layout/header');
    if ($page) {
      $p->load->view($page,$data);
    }
    $p->load->view('layout/footer');
  }
}
function adminview($p,$page)
{
 $params = func_get_args();
  if (count($params)<3) {
    $p = $params[0];
    $page = $params[1];
    $p->load->view('admin/layout/header');
    if ($page) {
      $p->load->view($page);
    }
    $p->load->view('admin/layout/footer');
  }else{
    $p = $params[0];
    $page = $params[1];
    $data = $params[2];
    $p->load->view('admin/layout/header');
    if ($page) {
      $p->load->view($page,$data);
    }
    $p->load->view('admin/layout/footer');
  }
}

function model($p,$model)
{
    $p->load->model($model);
    return $p->$model;
}


function pp($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


?>
