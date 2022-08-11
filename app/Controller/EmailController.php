<?php

namespace app\Controller;

class EmailController
{

  private $senderEmail;
  private $recieverEmail;
  private $hostName;
  public $mailer;

  function __construct($PHPMailer) {
    // echo 'email controller';
    $this->mailer = $PHPMailer;
  }

  public function VerifyEmailId($to, $token) {

    /* Open the try/catch block. */
    try {

      /* SMTP parameters. */

       /* Tells PHPMailer to use SMTP. */
       $this->mailer->isSMTP();

       /* SMTP server address. */
       $this->mailer->Host = 'smtp.hostinger.in';

       /* Use SMTP authentication. */
       $this->mailer->SMTPAuth = TRUE;

       /* Set the encryption system. */
       $this->mailer->SMTPSecure = 'tls';

       /* SMTP authentication username. */
       $this->mailer->Username = 'info@visiondecoder.com';

       /* SMTP authentication password. */
       $this->mailer->Password = 'visiondecoder@&*^99';

       /* Set the SMTP port. */
       $this->mailer->Port = 587;

       /* Disable some SSL checks. */
    $this->mailer->SMTPOptions = array(
       'ssl' => array(
       'verify_peer' => false,
       'verify_peer_name' => false,
       'allow_self_signed' => true
       )
    );


       /* Set the mail sender. */
       $this->mailer->setFrom('info@visiondecoder.com', 'H2L Labs');

       /* Add a recipient. */
       $this->mailer->addAddress($to, 'Verify Account');

       // $this->mailer->addReplyTo('vader@empire.com', 'Lord Vader');

    //    $this->mailer->addCC('admiral@empire.com', 'Fleet Admiral');
    // $this->mailer->addBCC('luke@rebels.com', 'Luke Skywalker');

       /* Set the subject. */
       $this->mailer->Subject = 'Verify your email id';

       // $this->mailer->addAttachment('/home/darth/star_wars.mp3', 'Star_Wars_music.mp3');

       $this->mailer->isHTML(TRUE);
       $this->mailer->Body = 'Click below link to verify your email. <br>
       <a href="'.ROOT_DOMAIN.'/verify-email.php?e='.$to.'&t='.$token.'">Verify</a>';
       // $this->mailer->AltBody = 'There is a great disturbance in the Force.';


       /* Set the mail message body. */
       // $this->mailer->Body = 'Click below link to verify your email.';

       /* Finally send the mail. */
       $this->mailer->send();
    }
    catch (Exception $e)
    {
       /* PHPMailer exception. */
       echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
       /* PHP exception (note the backslash to select the global namespace Exception class). */
       echo $e->getMessage();
    }
  }

  public function ForgetPasword() {
    echo 'forget password';
  }

  public function ResendMail() {
    echo 'resend mail';
  }

}
