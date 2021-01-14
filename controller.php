<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/font.css" />
        <link rel="stylesheet" href="css/confirmation.css" />
        <link rel="icon" href="images/Favicon.jpeg" />
        <!-- <META HTTP-EQUIV="Refresh" CONTENT="3;URL=#"> -->
        <title>Contact</title>
    </head>
<?php // La réception du formulaire 

    // Vérifie qu'il provient d'un formulaire
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST["name"]; //Le $_POST va aller chercher dans le formulaire "name"
     $email = $_POST["email"];
     $subject = $_POST["subject"];
    
    if (!isset($name)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ //Permet d'envoyer une adresse E-mail correct
       die("S'il vous plaît entrez votre adresse e-mail"); // Seulement lui fonctionne mais mal
     }
      if (!isset($subject)){
          die("Veuillez remplir le champ.");
      }
   } 
?> <!-- Fin de la réception -->
        <body>
          <img class="logo" src="http://tomy/Tomy/maquette/images/Logo.png">
          <div class="sous-ligne"> </div>
            <h1>Résumer de votre demande de contact </h1>
            <label id="Compte"></label>
 <script type="text/javascript">
 var Affiche=document.getElementById("Compte");
 function Rebour() {
 var date1 = new Date();
 var date2 = new Date ("Jan 15, 2021 00:00:00");
 var sec = (date2 - date1) / 1000;
 var n = 24 * 3600;
 if (sec > 0) {
 j = Math.floor (sec / n);
 h = Math.floor ((sec - (j * n)) / 3600);
//  mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
//  sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
 Affiche.innerHTML = "Redirection automatique vers la page d'acceuil dans :"+ sec + " s";
 window.status = "Temps restant : "+ sec + " s ";
 }
 tRebour=setTimeout ("Rebour();", 1000);
 }
 Rebour();
 </script>
              <div class="block">
                <div class="dessus1">
                  Prenom :
                </div>
                  <div class="nom">
                    <?php echo $_POST['name']; ?> 
                  </div>
                  <div class="dessus2">
                    E-mail :
                  </div>
                  <div class="email">
                    <?php echo $_POST['email']; ?>
                  </div>
                  <div class="dessus3">
                    La raison de votre demande :
                  </div>
                  <div class="subject">
                    <?php echo $_POST['subject']; ?>
                  </div>
              </div>
        </body>
</html>


