<?php
    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['subject']) && !empty($_POST['subject']) &&  isset($_POST['message']) && !empty($_POST['message'])){
            $to = "samuel.jeffers@hotmail.com";
            $subject = "My Portfolio Website | Contact Form: ".$_POST['subject'];

            $message = " 
                <b>Customer:</b>".$_POST['name']."<br>
                <b>Email:</b>".$_POST['email']."<br>
               
// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <contactme@samueljeffers.co.uk>' . "\r\n";

print $message;
exit;

            mail($to,$subject,$message,$headers);

    }else{
        print "Please fill all the required fields";
    }

?>