<?php

// EMAIL from gabca.com.mx comment section
// by @behrmart para GABCA bufete Creativo.

$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $comment = test_input($_POST["mensaje"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$to      = 'gabriel@gabca.com.mx';
$subject = 'from GABCA.COM.MX WEBFORM';
$message = 'From: '.$name. "\r\n\r\n" .
					 'Email: '.$email. "\r\n\r\n" .
					 'Tel: '.$phone. "\r\n\r\n" .
					 'Mensaje: ' . $comment;
$headers = 'From: webmaster@gabca.com.mx' . "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 

<?php include 'GABCA2.0-HEADER.php';?>

<!-- BEHRMART Contacto PHP -->
<div class="container-fluid emailsent">
	<div class="row">
		<div class="col-12 p-5 text-center">
			<h2>Su mensaje ha sido enviado. Gracias</h2>
			<!-- <button type="button" class="btn btn-outline-warning">Regresar a Inicio</button> -->
			<a href="index.php" class="btn btn-outline-secondary">Regresar al Inicio</a>
		</div>
	</div>
</div>

<?php include 'GABCA2.0-FOOTER.php';?>