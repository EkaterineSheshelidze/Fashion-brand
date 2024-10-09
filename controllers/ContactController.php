  
<?php

use config\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller {

    public function index(){
        $contact_send = false;
        $contact_send_message="";

        if(isset($_POST) && !empty($_POST)){
            $name = $_POST["name"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $contact_send = true;
            $mail = new PHPMailer(true);

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
                $mail->isSMTP();                                            
                $mail->Host       = MAIL_HOST;                  
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = MAIL_USERNAME;                   
                $mail->Password   = MAIL_PASSWORD;                            
                $mail->Port       = MAIL_PORT;                                    
            
                //Recipients
                $mail->setFrom($email);
                $mail->addAddress(MAIL_TO);    
                $mail->addReplyTo($email);
               
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'New message from project';
                $mail->Body    = '
                    name: '.$name.' <br>
                    lastname: '.$lastname.' <br>
                    message: '.$message.' <br>
                    
                ';
            
                $mail->send();
                $contact_send_message = 'Message has been sent';
            } catch (Exception $e) {
                $contact_send_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        $contact = new Contact();
        
        $this->data['menu'] = $contact->getMenu();
        $this->data["contact_send"] = $contact_send;
        $this->data["contact_send_message"] = $contact_send_message;
        $this->tpl = 'contact';
    }

}