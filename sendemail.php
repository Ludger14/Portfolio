<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


?>

<?php 

$to = "ludgerjeanlouis@gmail.com";
$subject = "$assunto";
$mensagem = "<strong>Nome:</strong> $nome<br /><br /><strong>E-mail:</strong>$email<br /><br /><strong>Assunto:</strong> $assunto<br /><br /><strong>Mensagem:</strong> $mensagem ";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
mail($to, $subject, $mensagem, $header);
echo "Enviado!";

?>