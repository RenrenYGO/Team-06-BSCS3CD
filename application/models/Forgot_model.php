<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

class Forgot_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function forgotpassword($email){
            $this->db->select('*');
            $this->db->from('user'); 
            $this->db->where('email', $email); 
            $query=$this->db->get();
            return $query->row_array();
    }

    public function forgotchangepassword($email,$password){
            $newpass['password'] = password_hash($password, PASSWORD_DEFAULT);
            $this->db->where('email', $email);
            $this->db->update('user', $newpass);
    }

    public function sendpin($data){
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from user where email = '".$email."' ");

        if($query1->num_rows()>0){
            $passwordplain = "";
            $passwordplain  = rand(999999999,9999999999);

            $newpass['TPIN'] = password_hash($passwordplain, PASSWORD_DEFAULT);
            $this->db->where('email', $email);
            $this->db->update('user', $newpass);

            $mail_message='Commhub is sending you this email in order to reset your password,<br> Your temporary <b>PIN</b> is <b>'.$passwordplain.'</b>'."\r\n";
            $mail_message.='<br>Ignore this message if you did not send this request.';
            $mail_message.='<br>Please update your password.<br> Thanks & Regards';
            $mail_message.='<br>Commhub';        
            date_default_timezone_set('Etc/UTC');    
            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Mailer="smtp";
            $mail->SMTPSecure = "tls"; 
            $mail->SMTPDebug  = 1;
            $mail->Debugoutput = 'html';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $username = env('EMAIL_USERNAME');
            $password = env('EMAIL_PASSWORD'); 
            $mail->Username = $username;    
            $mail->Password = $password;
            $mail->setFrom('admin@site', 'admin');
            $mail->IsHTML(true);
            $mail->addAddress($email);
            $mail->Subject = 'Commhub OTP';
            $mail->Body    = $mail_message;
            $mail->AltBody = $mail_message;        
            
            if(!$mail->send()){
                $this->session->set_flashdata('msg','Failed to send password, please try again!');
            }else{
                $this->session->set_flashdata('email',$email);
            }
            redirect(base_url('forgot/pin'));
            }else{
                $this->session->set_flashdata('msg','Email not found try again!');
            redirect(base_url('login'));
        }
    }
}