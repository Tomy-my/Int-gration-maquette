<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    
    if (!isset($name)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("S'il vous plaît entrez votre adresse e-mail");
    }
    if (!isset($subject)){
        die("Veuillez remplir le champ.");
    }
    
    print "Salut " . $name . "!, votre adresse e-mail est ". $email;
  }
?>