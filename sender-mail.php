<?php

require_once('phpmailer/class.phpmailer.php');

function sender($subject, $file=null, $mensagem=null, $from='emaildeenvio@gmail.com', $nome='#SUAHASHTAG') {

  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
  $mail->IsSMTP(); // telling the class to use SMTP

  try {
    $mail->Host       = "mail.seudominio.com.br"; // SMTP server
    $mail->CharSet    = "UTF-8";
    $mail->SMTPDebug  = 0;                      // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                   // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                  // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";       // sets GMAIL as the SMTP server
    $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
    $mail->Username   = "seuemail@gmail.com";     // GMAIL username
    $mail->Password   = "123456"; // GMAIL password
    $mail->AddAddress('suanoiva@gmail.com', 'NOME DA SUA NOIVA');
    $mail->AddAddress('vpce@gmail.com', 'SEU NOME');
    $mail->SetFrom($from, $nome);
    $mail->Subject    = $subject;
    if($mensagem == null) {
      $mail->AltBody    = 'Segue anexo o arquivo de conteudo com os dados atualizados!'; // optional - MsgHTML will create an alternate automatically
      $mail->MsgHTML('Segue anexo o arquivo de conteudo com os dados atualizados!');
    } else {
      $mail->AltBody = $mensagem;
      $mail->MsgHTML($mensagem);
    }
    if(isset($file)) {
      $mail->AddAttachment($file);
    }
    $mail->Send();

  } catch (phpmailerException $e) {
    //echo $e->errorMessage(); //Pretty error messages from PHPMailer
    return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
  } catch (Exception $e) {
    return http_response_code(400); // header("HTTP/1.1 400 Bad Request");
    //echo $e->getMessage(); //Boring error messages from anything else!
  }
}
?>