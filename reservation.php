<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "votre_adresse_email@example.com";
    $subject = "Nouvelle Réservation de " . $nom;
    $body = "Nom: " . $nom . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Date de réservation: " . $date . "\n\n";
    $body .= "Message:\n" . $message;
    
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre réservation a été envoyée avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre réservation. Veuillez réessayer.";
    }
}
?>
