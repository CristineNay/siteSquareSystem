<?php
//Variáveis
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


// Compo E-mail
  $arquivo = "
  <html>
    <head>
      <meta charset=UTF-8>
      <meta name='viewport' content='width=device-width, initial-scale=1.0' />
      <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>    
    <html xmlns='http://www.w3.org/1999/xhtml'>
    </head>

    <body style='margin: 0; padding: 0; font-family: 'Montserrat', sans-serif;'>
        <table align='center' border='0' cellpadding='0' cellspacing='0' width='600'>
            <tr>
                <td align='right' bgcolor='#2a2b2d' style='padding: 20px 0 20px 0;'>
                    <img src='images/tudaun-white.png' width='120' height='90' style='display: block;' />
                </td>
            </tr>
            <tr>
                <td bgcolor='#70bbd9' align='center'>
                    <h2>Nova mensagem de ".$nome." </h2>
                    <span> ".$mensagem." </span>
                </td>
            </tr>
            <tr>
                <td bgcolor='#2a2b2d'>
                    <span style='color: #f9fafc; font-size:small;'>Este e-mail foi enviado em <b>".$data_envio."</b> às <b>".$hora_envio."</b></span>
                </td>
            </tr>
            
        </table>
    </body>
</html>
  ";

  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "cristine.nay15@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$nome.' <'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO!";
  echo $mgm;
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo $mgm;
  }
   
?>