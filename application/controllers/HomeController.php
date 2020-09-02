<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends P_Controller {


	public function index()
	{
		$this->load->view('layout/homeheader');
    $this->load->view('home');
    $this->load->view('layout/footer');

	}

	public function pending()
	{
		views($this,"pending");
	}

	public function logout()
  {    
    $this->session->unset_userdata('admin');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('last_url');
    redirect(base_url());
  }
}
