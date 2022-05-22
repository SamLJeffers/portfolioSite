<?php
use PHPMailer/PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    
    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.hotmail.co.uk";
    $SMTPAuth = true;
    $mail->Username = "samueljefferspt@hotmail.co.uk";
    $mail->Password = "Sorrent082";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("samueljefferspt@hotmail.co.uk");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $respone = "Email sent!";
    }
    else
    {
        $staus = "failed";
        $respone = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>