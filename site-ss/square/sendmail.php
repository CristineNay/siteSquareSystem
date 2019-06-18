 <?

//pega as variaveis por POST
$nome      = $_POST["nome"];
$email     = $_POST["email"];
$mensagem  = $_POST["mensagem"];


global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail para você
mail ("cristine.nay15@gmail.com",                       //email aonde o php vai enviar os dados do form
      "Data: $data\nHora: $hora\n\nNome: $nome\n\nMensagem: $mensagem",
      "From: $email"
     );

//aqui são as configurações para enviar o e-mail para o visitante
$site   = "cristine.nay15@gmail.com";                    //o e-mail que aparecerá na caixa postal do visitante
$titulo = "Confirmação de recebimento";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, Agradecemos por entrar em contato conosco. Em breve responderemos a sua mensagem";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
header ("Location: contato_ok.php");

?>

<!--"Location: contato_ok.php"-->

<!--https://squaresystem.000webhostapp.com/-->