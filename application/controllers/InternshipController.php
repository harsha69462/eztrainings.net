<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternshipController extends P_Controller {


	public function index()
	{
		$this->load->view('layout/header');
    // $this->load->view('internshipdetails');
		$this->load->view('courses/courseslisting');
    $this->load->view('layout/footer');

	}
}
