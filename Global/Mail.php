<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function SendEmail($ReceiverEmail,$Receiver_Name,$Ticket_ID,$Time){
    include "phpmailer/src/PHPMailer.php";
    include "phpmailer/src/SMTP.php";
    include "phpmailer/src/Exception.php";
    $mail = new PHPMailer(true);
    try{
        /*Server Setting*/
//        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.mboxhosting.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Username = 'minaremon@minaremon.com';
        $mail->Password = 'Lolo1986***';
        $mail->setFrom('minaremon@minaremon.com', 'Mina Remon');
        $mail->addAddress($ReceiverEmail,$Receiver_Name);
        $mail->addReplyTo('info@minaremon.com', 'info');
        $mail->isHTML(true);
        $mail->Subject = "Confirmation";
        $mail->Body = "<h1>Confirmation Email</h1>
                        <p>Dear Mr,$Receiver_Name</p>
                        <p>We Confirm That Your Data Has Been Added To Our Database</p>
                        <p>Ticket_ID : $Ticket_ID</p>
                        <p>Sent At: $Time</p>";
        $mail->send();
//        echo 'Message has been sent';
    }
    catch (Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
 ?>

