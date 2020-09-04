<?php

/**
 *  @title : Mail.php
 *  
 *  @brief : mail class
 */


 // include PHPMailer
require_once(__DIR__.'/./PHPMailer/src/PHPMailer.php');
require_once(__DIR__.'/./PHPMailer/src/SMTP.php');
require_once(__DIR__.'/./PHPMailer/src/Exception.php');


class Mail {

    protected $mail;


    /**
     *  @name : __construct
     *
     *  @param : void
     * 
     *  @return : void
     * 
     *  @brief : Mail constructor, (configure PHPMailer)
     */
    function __construct() {

        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->SMTPDebug = false;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'etuamouv@gmail.com';                     // SMTP username
        $mail->Password   = '';                               // SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->setFrom('etuamouv@gmail.com', 'AMOUV Covoiturage');


        $this->mail = $mail;
        
    } // function __construct()



    /**
     *  @name : sendMail
     *  
     *  @param : $sendInformation : array : mail and name destination
     *  @param $subject : string : subject mail
     *  @param : $message : array : 0 : view mail, 'var' : var needed for view
     * 
     *  @return : boolean : true if mail send, false instead
     * 
     *  @brief : send a mails
     * 
     *  
     */
    public function sendMail($sendInformation = [], $subject, $message) {
        $mailtoSend = $this->mail;

        // Get the HTML message
        require_once(__DIR__.'/../Public/Views/Mail/'.$message[0].'.php');

        $mailtoSend->addAddress($sendInformation['mail'], $sendInformation['name']);     // Add a recipient
        $mailtoSend->isHTML(true);                                  // Set email format to HTML
        $mailtoSend->Subject = $subject;
        $mailtoSend->Body    = $content;

        try {
            $mailtoSend->send();
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

}




?>
