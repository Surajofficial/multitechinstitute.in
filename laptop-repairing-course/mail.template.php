<?php 
    // Dont forgot to upload PHPMailer folder
    if(!file_exists("PHPMailer/PHPMailer/src/PHPMailer.php")){
        echo "Sorry! PHPMailerFolder does not exist or removed from the root path";
        exit;
    }
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require 'PHPMailer/PHPMailer/src/Exception.php';
    require 'PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/PHPMailer/src/SMTP.php';
    
 function mks_sendMail($args){
    $to = $args['to'];
    $subject = $args['subject'];
    $msg = $args['msg'];
    $bcc = $args['bcc']!=''?$args['bcc']:'';
    $cc = $args['cc']!=''?$args['cc']:'';
    $file = $args['file']!=''?$args['file']:'';
    
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'multitechinstitute.in';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = false;                                   // Enable SMTP authentication
        $mail->Username   = '';                     // SMTP username
        $mail->Password   = '';                               // SMTP password
       // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('multitechtilaknagar@gmail.com','multitechinstitute');
        $mail->addAddress($to);     // Add a recipient
       // $mail->addAddress('ellen@example.com');               // Name is optional
     //   $mail->addReplyTo('info@example.com', 'Information');
      if($cc!=''){$mail->addCC($cc);}
       if($bcc!=''){$mail->addBCC($bcc);}
    
        // Attachments
        if($file!=''){  
        $mail->addAttachment($_FILES[$file]['tmp_name'],$_FILES[$file]['name']);  
        }      // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =   $msg ;
       // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


function getEnquiredMessage($userarray){
    
    $name = $userarray['name'];
    $mobile = $userarray['mobile'];
    $email = $userarray['email'];
    $department = $userarray['department'];
    $city = $userarray['city'];
    $message = '
    
   

<!DOCTYPE html>
<html>
    <style>
        h5{
           margin:10px;
           font-weight:300;
        }
        
    </style>
<body>
<table style="text-align:center;width: 30%;margin-left:auto;
    margin-right:auto;">
    <tr>
        <td><img src="http://www.multitechinstitute.in/laptop-repairing-course/image/logo.png" style="max-width:100px;"></td>
    </tr>
</table>
       
   
<table style="
    font-family: sans-serif;
    text-align: center;
    background-color: #e6e6e6;
    width: 50%;
    border-top: 5px solid #002063;
    border-collapse: collapse;
    margin-left:auto;
    margin-right:auto;
">
    
    <tr>
        <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">Hi Admin,</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">User: '.$name.'</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;"> Mobile: '.$mobile.'</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">E-mail : '.$email.'</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">Course : '.$department.'</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">City : '.$city.'</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">wants a Demo class. Please check</h5></td>
    </tr>
    <tr>
      <td> <h5 style="margin:4px;font-size:15px;font-weight:300;">Thanks</h5></td>
    </tr>
</table>
</body>
</html>
    
    
    ';
    return   $message ;
}





?>