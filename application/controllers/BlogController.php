<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends P_Controller {

	public function __construct() {
    parent::__construct();
    if (!isset($_SESSION['username'])) {
      redirect(base_url('login'));
    }
  }


	public function index(){
		$this->load->library('form_validation');
		$this->load->model('CommentModel');
		$this->form_validation->set_rules("comment", "Comment", "required");
		$comment_data = [];
		if ($this->form_validation->run() !== false) {
			$comment = $this->input->post("comment");
			$email = $this->session->username;
			$mydate=getdate(date("U"));
			$date = $mydate["weekday"].", ".$mydate["month"]." ".$mydate["mday"].", ".$mydate["year"];
			$this->CommentModel->addComment($comment, $email, $date);
			redirect(base_url('blogs'));
		}
		$comment_data['comment'] = $this->CommentModel->getComments();
		$comment_data['reply'] = $this->CommentModel->getReply();

		$this->load->view('layout/header');
    $this->load->view('blogs', $comment_data);
    $this->load->view('layout/footer');

	}


	// this gets reply
	public function replycomment(){
		$this->load->library('form_validation');
		$this->load->model('CommentModel');
		$comment_arr = $this->input->get();
		$comment_id = $comment_arr['cuid'];

		$this->form_validation->set_rules("reply".$comment_id,"Reply", "required");

		if ($this->form_validation->run() !== false) {
			$email = $this->session->username;
			$reply = $this->input->post("reply".$comment_id);
			$date = date("l jS \of F Y");
			$flag = $this->CommentModel->insertReply($comment_id, $reply, $email, $date );
			redirect(base_url("blogs"));
		} else{
			echo "404 PAGE NOT FOUND";
		}
	} //function ends here


}
