
<?php
if(isset($_POST['submit'])) {

$to = "votre.Email@test.com";
$subject = "siteTest!";
 
// récupération des données du formulaire
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//construction du message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// envoie du message vers l'adresse mail renseignée
mail($to, $subject, $body,$email_field);
 
// redirection vers un message de confirmation
header('Location: confirmation.html');

} else {

// rien si erreur

}
?>
