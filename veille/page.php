<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire d'inscription</title>
</head>
<body>
<div>
        <main>
            <h1>INSCRIPTION</h1>
            <form action="connexion.php" method="post">
                <div>
                    <label for="nom">Nom</label><br>
                    <input type="text" id="nom" name="nom" required>
                </div><br>
                <div>
                    <label for="prenoms">Prenoms</label><br>
                    <input type="text" id="prenoms" name="prenoms" required>
                </div><br>
               
                <div class="genre">
                    <label for="">Genre</label><br>
                    <input type="radio" name="genre" id="homme" value="H"><label for="">H</label>
                    <input type="radio" name="genre" id="femme" value="F"><label for="">F</label>
                    <input type="radio" name="genre" id="autres" value="A"><label for="">Autres</label>
                </div><br>
                <div>
                    <label for="">Email</label><br>
                    <input type="email" name="email" id="email" required>
                </div><br>
                <div>
                    <label for="">Mot de passe</label><br>
                    <input type="password" name="motdepasse" id="motdepasse" required>
                </div><br>
                <div>
                    <label for="">Confirmer mot de passe</label><br>
                    <input type="password" name="motdepasse1" id="motdepasse1" required>
                </div><br>
            
                <button type="submit" value="s'inscrire">S'inscrire</button>

                <div class="connexion">
                    <h4>Avez-vous déjà un compte?</h4>
                    <button><a href="conn.php">connectez-vous</a></button>
                </div>
                
            </form>
        </main>
        
    </div>
</body>
</html>