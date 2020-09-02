<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model {
    // public $user;
  	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                // $uemail = $_SESSION['username'];
                // $user = $this->db->query("select * from user where email='$uemail';")->result_array();
                // $user = $user[0];
        }
	private $User = 'users';
  public function GetUserData(){
    $e = $_SESSION['username'];
 		$row = $this->db->query("select * from user where email='$e';")->result_array();
 		if (count($row) > 0) {
			 return $row;
		 } else {
			 return false;
		 }
   	}
	public function IfExistEmail($email){
		 $this->db->select('id, email');
		 $this->db->from("user");
		 $this->db->where('email', $email);
		 $query = $this->db->get();
		 if ($query->num_rows() != 0) {
			  return $query->row_array();
		 } else {
			 return false;
		 }
	}
	public function PictureUrl()
	{
    $uemail = $_SESSION['username'];
    $user = $this->db->query("select * from user where email='$uemail';")->result_array();
    $id = $user[0]['id'];
 		$this->db->select('id,profile_pic');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
		$res = $query->result_array();
		if(!empty($res['profile_pic'])){
			return base_url('assets/uploads/profile/'.$res['profile_pic']);
		}else{
			return base_url('public/images/user-icon.jpg');
		}
   }

  // profile pic
	public function PictureUrlById($id){
 		$this->db->select('id,profile_pic');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  	$query = $this->db->get();
		$res = $query->result_array();
		if(!empty($res[0]['profile_pic'])){
			return base_url('assets/uploads/profile/'.$res[0]['profile_pic']);
		}else{
			return base_url('public/images/user-icon.jpg');
		}
  }


	public function GetName($id)
	{
 		$this->db->select('id,name');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
		$res = $query->row_array();
 		return $res['name'];
   }

	public function GetIDByName($name)
	{
 		$this->db->select('id,name');
		$this->db->from("user");
		$this->db->where("name",$name);
		$this->db->limit(1);
  		$query = $this->db->get();
		$res = $query->row_array();
 		return $res['id'];
   	}
	public function GetUserAddress($id)
	{
 		$this->db->select('*');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
		$res = $query->row_array();
 		return $res;
   	}
	public function UpdateProfileImageByID($data)
	{
 		$res = $this->db->update("user", $data ,['id' => $_SESSION['id']] );
		if($res == 1)
			return true;
		else
			return false;
 	}
	public function UpdateCustomerProfileImageByID($data)
	{
 		$res = $this->db->update("user", $data ,['id' => $_SESSION['id'] ] );
		if($res == 1)
			return true;
		else
			return false;
 	}
	 public function GetUserDataById($id)
	{
 		$this->db->select('*');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
 		if ($query) {
			 return $query->row_array();
		 } else {
			 return false;
		 }
   	}
	public function GetMemberNameById($id)
	{
 		$this->db->select('id,name');
		$this->db->from("user");
		$this->db->where("id",$id);
		$this->db->limit(1);
  		$query = $this->db->get();
 		$u=$query->row_array();
		return $u['name'];
   	}
	public function AddMember($data)
	{
		$res = $this->db->insert(user,$data);
		if($res == 1)
			return $this->db->insert_id();
		else
			return false;
  	}
	public function StatusUpdateByID($user_id,$status)
	{
 		$res = $this->db->update("user",['msg_status' => $status],['id' => $user_id ] );
		if($res == 1)
			return true;
		else
			return false;
 	}
	public function TrashByID($user_id)
	{
 		$res = $this->db->delete("user",['id' => $user_id ] );
		if($res == 1)
			return true;
		else
			return false;
 	}
 	public function AllRoleTypes($role)
	{
 		$this->db->select('id,name');
		$this->db->from("user");
		$this->db->where("role",$role);
   		$query = $this->db->get();
 		$u=$query->num_rows();
		return $u;
   	}
	public function MentorList()
	{
 		$r = $this->db->query("select * from user where role='admin' or role='mentor';")->result_array();
    return $r;
   }
	public function StudentList()
	{
    $r = $this->db->query("select * from user where role='student'")->result_array();
    return $r;
  }
 }
