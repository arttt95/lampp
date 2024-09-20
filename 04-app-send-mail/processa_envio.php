<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "./librarys/PHPMailer/Exception.php";
require "./librarys/PHPMailer/PHPMailer.php";
require "./librarys/PHPMailer/POP3.php";
require "./librarys/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

class Mensagem {

    /////////////
    //  ATTRS  //
    /////////////

    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    //////////////////
    //  CONST/DEST  //
    //////////////////

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    ///////////////
    //  GETTERS  //
    ///////////////

    public function __get($atributo) {
        return $this->$atributo;
    }

    ///////////////
    //  SETTERS  //
    ///////////////

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    public function mensagemValida() {
        // Lógica
        if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            return false;
        }

        return true;
    }
}

$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

/*
/////////////
echo '<hr>';
/////////////


echo '<pre>';
print_r($mensagem);
echo '</pre>';
*/

if(!$mensagem->mensagemValida()) { // Verificar se está retornando true ou false
    echo 'Mensagem não é válida';
    die();
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'webdevopscompleto@gmail.com';                     //SMTP username
    $mail->Password   = 'eirk ycba cqpy mrsd';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('webdevopscompleto@gmail.com', 'Web Devops Remetente');
    $mail->addAddress('thuurdamasceno@gmail.com', 'Web Devops Destinatário');     //Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Oi. Eu sou o assunto!';
    $mail->Body    = 'Oi. Eu sou o conteúdo do <strong>email</strong>!';
    $mail->AltBody = 'Oi. Eu sou o conteúdo do email!';

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo "Não foi possível enviar este email. Por favor, tente novamente mais tarde! Detalhes do erro: {$mail->ErrorInfo}";
}

?>