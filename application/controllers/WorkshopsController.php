<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkshopsController extends P_Controller {


	public function pythonworkshop()
	{
		$this->load->view('layout/header');
    $this->load->view('workshops/pythonworkshop');
    $this->load->view('layout/footer');

	}
  public function csharpworkshop()
  {
    $this->load->view('layout/header');
    $this->load->view('workshops/csharpworkshop');
    $this->load->view('layout/footer');
 }
 public function djangoworkshop()
 {
   $this->load->view('layout/header');
   $this->load->view('workshops/djangoworkshop');
   $this->load->view('layout/footer');
}
public function fullstackworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/fullstackworkshop');
  $this->load->view('layout/footer');
}
public function datascience()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/datascience');
  $this->load->view('layout/footer');
}
public function aiworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/aiworkshop');
  $this->load->view('layout/footer');
}

public function mlworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/mlworkshop');
  $this->load->view('layout/footer');
}

public function ethicalhacking()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/ethicalhacking');
  $this->load->view('layout/footer');
}
public function gamedevworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/gamedevworkshop');
  $this->load->view('layout/footer');
}
public function awsworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/awsworkshop');
  $this->load->view('layout/footer');
}
public function rprogramming()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/rprogramming');
  $this->load->view('layout/footer');
}
public function golang()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/golang');
  $this->load->view('layout/footer');
}

public function angularworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/angularworkshop');
  $this->load->view('layout/footer');
}
public function englishworkshop()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/englishworkshop');
  $this->load->view('layout/footer');
}
public function webfullstackcourse()
{
  $this->load->view('layout/header');
  $this->load->view('workshops/webfullstackcourse');
  $this->load->view('layout/footer');
}











}
