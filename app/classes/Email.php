<?php


class Email
{

    private $mail = false;

    public function __construct()
    {
        $this->mail = new PHPMailer();
        $this->mail->SMTPDebug = 0;
        $this->mail->IsSMTP();
        $this->mail->Host = 'smtp.office365.com';
        $this->mail->Port = 587;
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'joe@dizpot.com';
        $this->mail->Password = '7383jmd2!';
        $this->mail->SMTPSecure = '';

    }

    public function sendNewEmployeeInvite($firstName, $lastName, $email, $codeCreation) {

        $this->mail->ClearAddresses();
        $this->mail->AddAddress($email, $firstName . " " . $lastName);
        $this->mail->From = "joe@dizpot.com";
        $this->mail->FromName = "DIZPOT";
        $this->mail->Subject = 'Your invitation to DIZPOT';


        $message = '<html><body>';
        $message .= '<h1">Hi ' . $firstName . ' ' .  $lastName . '!</h1>';
        $message .= '<p>An account has been created for you at DIZPOT.  Please go to this <a href="local.cms.com/users/tempPass/">link</a>, and log in using the e-mail and temporary password below.</p>';
        $message .= '<p>E-mail: ' . $email . '</p>';
        $message .= '<p>Temp Password: ' . $codeCreation . '</p>';
        $message .= '</body></html>';

        $this->mail->Body = $message;
        $this->mail->IsHTML(true);

        $this->send();
    }

    public function send() {
        if(!$this->mail->Send()) {
            echo $this->mail->ErrorInfo;
            //die;
        }
    }
}