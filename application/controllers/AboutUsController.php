<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUsController extends P_Controller {


	public function index()
	{
		$this->load->view('layout/header');
    $this->load->view('aboutus');
    $this->load->view('layout/footer');

	}
	public function team()
	{
		$this->load->view('layout/header');
    $this->load->view('team');
    $this->load->view('layout/footer');

	}
}
