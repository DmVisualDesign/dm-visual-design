
<?php

if(isset($_POST['enviar'])) {
  if(!empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email'])) {
    $name = $_POST['name'];
    $message = $_POST['message']
    $email = $_POST['email'];
    $header = "From: dm.visualdesing@gmail.com";
    $header = "Reaply-To: noreply@example.com";
    $header = "X-Mailer: PHP/". phpversion();
    $mail = mail($email,$msg,$header);
    if($mail){
        echo "<h4>¡Mail enviado exitosamente!</h2>"
    }
  }
}

?>