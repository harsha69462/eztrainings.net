<?php
 /**
  *
  */
 class CommentModel extends CI_Model{

  public function addComment($comment, $email, $date){
    $data = array(
      "comment" => $comment,
      "by_email" => $email,
      "date" => $date
    );
    $this->db->insert("comments", $data);
    return true;
  }

  public function getComments(){
    $row = $this->db->query("select * from comments")->result_array();
    $row = array_filter($row);
    return $row;
  }

  public function getReply(){
    $row = $this->db->query("select * from comments_reply")->result_array();
    $row = array_filter($row);
    return $row;
  }
  public function insertReply($comment_id, $reply, $email, $date ){
    $data = array(
      "comment_id" => $comment_id,
      "reply" => $reply,
      "reply_date" => $date,
      "reply_by" => $email,
    );
    $data = array_filter($data);
    $this->db->insert("comments_reply", $data);
    return true;
  }
 }


?>
