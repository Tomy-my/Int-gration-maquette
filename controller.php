<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/font.css" />
        <link rel="stylesheet" href="css/confirmation.css" />
        <link rel="icon" href="images/Favicon.jpeg" />
        <META HTTP-EQUIV="Refresh" CONTENT="121;URL=#">
        <title>Contact</title>
    </head>
<?php  
 // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    
    $name = $_POST["name"]; //Le $_POST va aller chercher dans le formulaire "name"
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    if (!isset($name)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ //Permet d'envoyer une adresse E-mail correct
      die("S'il vous plaît entrez votre adresse e-mail"); // Seulement lui fonctionne mais mal. Je comprends pas trop leur fonctionnement 
    }
    if (!isset($subject)){
      die("Veuillez remplir le champ.");
    } 

    //Ouvre une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Affiche les erreurs de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO users (name, email, subject) VALUES(?, ?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sss', $name, $email, $subject); 
    
    if($statement->execute()){
      
    }else{
      print $mysqli->error; 
    }
  }
?>

<script>
    var sec = 120;
    function tick()
    {
        document.getElementById('decompte').innerText = 'Vous allez être automatiquement redirigé vers la page principal dans  ' + sec + ' seconde(s)';
         
        if(sec == 0)
        {
            window.clearInterval(timer);
        }
 
        sec--;
    }
    var timer = window.setInterval(tick, 1000);
</script>


        <body>
          <img class="logo" src="/images/Logo.png">
          <div class="sous-ligne"> </div>
            <h1>Résumer de votre demande de contact </h1>
            <div id="decompte"></div>
            <div class="go-home">Cliquez <a href="/index.php">ici</a> pour aller directement à la page principal.</div>
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