<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
    <form method="post" action="test.php">
      Name : <input type="text" name="name" placeholder="Entrez votre nom" /><br />
      Email : <input type="email" name="email" placeholder="Entrer votre Email" /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    
    $name = $_POST["name"]; 
    $email = $_POST["email"];

    if (!isset($name)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("S'il vous plaît entrez votre adresse e-mail");
    }  

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);
    
    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO users (name, email) VALUES(?, ?)"); 
    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('ss', $name, $email); 
    
    if($statement->execute()){
      print "Salut " . $name . "!, votre adresse e-mail est ". $email;
    }else{
      print $mysqli->error; 
    }
  }
?>