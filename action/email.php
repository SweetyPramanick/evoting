<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

function send_otp($to, $subject, $content){
    $mail= new PHPMailer(true);
    try{
        $mail->SMTPDebug = 2;        //SMTP::DEBUG_SERVER;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rajeshsingh7903538124@gmail.com';                     //SMTP username
        $mail->Password   = 'qmrrdecasjsxkeio';                               //SMTP password
        $mail->SMTPSecure =  'tls';      //PHPMailer::ENCRYPTION_SMTPS;       //Enable implicit TLS encryption
        $mail->Port       = 587;         //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        // $mail->SMTPOptions= array(
        //     'ssl'=> array(
        //         'verify_peer'=>false,
        //         'verify_peer_name'=> false,
        //         'allow_self_signed'=> true

        //     )
        //     );
        // $mail->SMTPSecure=false;
        // $mail->SMTPAutoTLS=false;
    

        //Recipients
        $mail->setFrom('rajeshsingh7903538124@gmail.com', 'Online Voting System');
        $mail->addAddress($to);     //Add a recipient
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        // "<h3>Your OTP is: <b>'$content'</b></h3>
        // <br/><br/>";

        $mail->send();
        echo '<script>
        alert("OTP sent successfully");
        </script>';
        //echo "OTP sent successfully";
    
    }
    catch(Exception $e){
        echo '<script>
        alert("OTP could not be sent Mailer Error: {$mail->ErrorInfo})";
        </script>';
        //echo "OTP could not be sent Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
