<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "../phpmailer/src/PHPMailer.php";
include "../phpmailer/src/SMTP.php";
include "../phpmailer/src/Exception.php";
function SendEmail($ReceiverEmail,$Receiver_Name){
    $mail = new PHPMailer(true);
    try{
        /*Server Setting*/
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Username = 'minaremon1986@gmail.com';
        $mail->Password = 'Hecaro1986/*';
        $mail->setFrom('minaremon1986@gmail.com', 'Mina Remon');
        $mail->addAddress($ReceiverEmail,$Receiver_Name);
        $mail->addReplyTo('minaremon1986@gmail.com', 'Mina Remon');
        $mail->isHTML(true);
        $mail->Subject = "Confirmation";
        $mail->Body = "<h1>Confirmation Email</h1>
                        <p>Dear Mr,$Receiver_Name</p>
                        <p>We Confirm That Your Data Has Been Added To Our Database</p>";
        $mail->send();
//        echo 'Message has been sent';
    }
    catch (Exception $e){
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
 ?>

