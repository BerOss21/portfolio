<?php 

if(isset($_POST["send"])){
        $to = "admin@gmail.com";
        $subject = $_POST["subject"];
        $message = wordwrap($_POST["message"], 70, "\r\n");
        $headers  = 'From:' .$_POST["name"]." email:".$_POST["email"]. "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
        if(mail($to, $subject, $message, $headers)){
            echo "Message envoyer avec success";
            //echo ["success"=>true,"message"=>"Message envoyer avec success"];
        }
}
