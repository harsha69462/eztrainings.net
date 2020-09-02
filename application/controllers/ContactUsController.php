<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUsController extends P_Controller {


	public function index()
	{
		$this->load->view('layout/header');
    $this->load->view('contactus');
    $this->load->view('layout/footer');

	}
}
