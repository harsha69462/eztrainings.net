<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentsController extends P_Controller {


	public function index()
	{
		$this->load->view('layout/header');
    $this->load->view('payments');
    $this->load->view('layout/footer');

	}
}
