<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
// send email
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = "marketingdeportivo.com.ar";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@marketingdeportivo.com.ar'; 
    $mail->Password = 'Nwu$@UN-%a^%';
    $mail->setFrom('ceo@otraforma.com', 'Marketing Deportivo');
    $mail->addAddress('info@marketingdeportivo.com.ar', 'Marketing Deportivo');
    $mail->Subject = 'Marketing Deportivo Landing';
    $mail->msgHTML('<h2>Datos del suscriptor</h2>'."<br>".'Nombre: '.$name."<br>".'Email: '.$email."<br>".'Numero: '.$numero."<br>");
    $mail->AltBody = 'HTML mesaje no soportado';

    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
        echo "Message sent!";
    }
// ==========
}
?>