
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'junior@odyssee42.fr';

  $email = $_POST['email'];

  $message = 'Personne a recontacter au plus vite.';
  $subject = 'Nouveau message de formulaire de contact';
  $headers = "From: Contact <$email>" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "Content-Type: text/plain; charset=utf-8" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Nous vous recontacterons des que possible.";
    header ("Location: main.html");
  } else {
    echo "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
  }
}
?>
