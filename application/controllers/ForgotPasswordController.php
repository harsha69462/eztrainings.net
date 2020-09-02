<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPasswordController extends P_Controller {

public function __construct()
{
  parent::__construct();
  $this->load->helper('string');
  $this->load->library('form_validation');
  $this->load->library('phpmailer_lib');
}

  public function index()
  {
    $isUnique = $this->form_validation->set_rules('email','email','required|valid_email|callback_username_check');
    $this->form_validation->set_message('is_unique', 'Email already exist');
    if ($this->form_validation->run() == FALSE) {
      view($this,'account/user/forgot-password');
    }else{
      $token = random_string('alnum', 16);

      $this->updatePasswordToToken($this->input->post('email'),$token);

           $mail = $this->phpmailer_lib->load();

           // $mail->isSMTP();
           $mail->HOST = "mail.eztrainings.net";
           $mail->SMTPAuth = true;
           $mail->Username = 'team@eztrainings.net';
           $mail->Password = 'Welcome@123';
           $mail->SMTPSecure= 'tls';
           $mail->port = 587;

           $mail->setFrom('team@eztrainings.net','ezTrainings ');
           $mail->addReplyTo('team@eztrainings.net','ezTrainings ');
           $mail->addAddress($this->input->post('email'));
           $mail->Subject = 'ezTrainings  Reset Password';
           $mail->isHTML(true);
           $emailContent = '<!DOCTYPE><html><head></head><body>';
           $emailContent .='<h5>Please use the link below to reset your ezTrainings account password</h5>';
           $emailContent .='<p>Click <a href="'.base_url('account/reset-password?t='.$token).'">Here</a> To Reset Your Password';
           $emailContent .= "</body></html>";

           $mail->Body = $emailContent;

           if(!$mail->send()){
                 $this->setErrorMessage("Mail was not sent. Please contact admin");
           }
      $this->setMessage("A link has been sent to your email. please go through the link for resetting your password.");
      redirect(base_url('forgot-password'));
    }

  }

  public function username_check($email)
  {
    $data = $this->GetWhereEmail('user',$email);

    if (count($data) > 0)
    {
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('username_check', 'The {field} does not match our records');
      return FALSE;
    }
  }

  private function updatePasswordToToken($email,$token){
    $data = array("password"=>$token);
    $this->UpdateWhereEmail('user',$data,$email);
  }
  private function updatePassword($token,$password){
    $data = array("password"=>$password);
    $this->db->where('password',$token)->update('user',$data);
  }
  private function encrypt($password) {
      $hash = password_hash($password, PASSWORD_BCRYPT);
      return $hash;
  }
  public function resetPassword()
  {
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
    if ($this->form_validation->run() == FALSE) {
      view($this,'account/user/reset-password');
    }else{
      $this->updatePassword($this->input->get('t'),$this->encrypt($this->input->post('password')));
      $this->setMessage("The password has been reset successfully");
      redirect("login","refresh");
    }
  }

}
?>
