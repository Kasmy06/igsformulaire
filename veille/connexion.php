
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "igs";

      $pdo = new PDO("mysql:host=localhost;dbname=igs", "root", "");

        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $utilisateur = $_POST['utilisateur'];
        $genre = $_POST['genre'];
        $email = $_POST['email'];
        $motdepasse = $_POST['motdepasse'];
        $motdepasse1 = $_POST['motdepasse1'];
        $numero = $_POST['numero'];
       

        if ($motdepasse == $motdepasse1){
             $motdepassecrypte=md5($_POST['motdepasse']);
             $sql = "INSERT INTO igsdinscription (nom, prenoms,genre, email, motdepasse,motdepasse1)
            VALUES (?,?,?,?,?,?)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$nom, $prenoms, $genre, $email, $motdepassecrypte]);
            header("location:conn.php");
        } else{
            echo "le mot de passe et confimer mot de passe ne sont pas conformes";
        }

   
    
?>