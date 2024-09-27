
<?php

require("mail.php");

function validate($name, $email, $subject, $message, $form){
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);    
}

$status = "";

if(isset($_POST["form"])){
    if(validate(...$_POST)){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $body = "$name <$email> te envia el siguiente mensaje <br><br>" .$message;

        //mandar el correo electronico

        sendMail($subject, $body, $email, $name, true);
        
        $status = "success";

    }else{
        $status = "danger";
    }
}


?>