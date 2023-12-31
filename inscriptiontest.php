<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
       .inscbody{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .h {
            text-align: center;
            color: black;
            font-family:Lucida Handwriting;
        }

        .inscform {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .formlabel {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .forminput {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        .submitform {
            background-color: #ff5757;
            color: #fff;
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 8px;
            cursor: pointer;
            border-radius: 5px;
        }
        
       
</style>
</head>

<body class="inscbody">
    <h2 class="h"><u>INSCRIPTION</u></h2><br>
   <form class="inscform" action="inscriptiontest.php" method="post">
        <label class="formlabel"for="nom">Nom :</label>
        <input class="forminput" type="text" name="nom" required><br>

        <label class="formlabel" for="prenom">Prénom :</label>
        <input  class="forminput" type="text" name="prenom" required><br>
        
        <label class="formlabel" for="email">Email :</label>
        <input  class="forminput" type="email" name="email" required><br>
        
        <label class="formlabel" for="mot_de_passe">Mot de passe :</label>
        <input class="forminput" type="password" name="mot_de_passe" required><br>
        
        <input class="submitform" type="submit" value="S'inscrire">
 </form>
 <?php

include('connexion.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    connexion();

    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT); 

   
    $requete = $bdd->prepare("INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)");

    
    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':prenom', $prenom);
    $requete->bindParam(':email', $email);
    $requete->bindParam(':mot_de_passe', $mot_de_passe);

    
    $resultat = $requete->execute();

    
    if ($resultat) {
        echo "Inscription réussie !";
    } else {
        echo "<h1>Erreur lors de l'inscription.</h1>";
    }
}
?>

    </body>

</html>
