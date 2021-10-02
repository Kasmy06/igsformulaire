

<?php
   $msg_error_email="";
   $msg_error_motdepasse="";

 if (isset($_POST['connecter'])){
 	$pdo = new PDO("mysql:host=localhost;dbname=igs", "root", "");
 	$email = $_POST['email'];
 	$motdepasse=md5($_POST['motdepasse']);

 	if ($email){
 		$sql="SELECT * FROM igsdinscription WHERE email='$email'";
 		$reponse1=$pdo->query($sql);
 		$donnee=$reponse1->fetch();
 		$nombre=$reponse1->rowCount();
 		if ($nombre>0){
 			$requete="SELECT * FROM igsdinscription WHERE motdepasse='$motdepasse'";
		 	$reponse=$pdo->query($requete);
		 	$donnees=$reponse->fetch();
		 	$nbre=$reponse->rowCount();

 	if ($nbre>0){
 		header("location:index2.php");
 	} else{
 		$msg_error_motdepasse='<span style=color:red; text-align=center;> !mot de passe inexistant </span>';
 	}
 		}else{
 			$msg_error_email='<span style=color:red; text-align=center;> !compte inexistant</a> </span>';
 		}
 	}
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://stackpath.bootstrpcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background:rgba(215,113,224,0.6);
        }
        main{
            display:flex;
            justify-content:center;
            width: 100%;
            padding: 10px;
            min-height:100vh;
            align-items:center;
        }
        #form{
            max-width:400px;
            width:100%;
            min-height:400px;
            background:rgba(215,113,224);
            border: radius 5px;
            padding: 0 10px 0 10px;

        }
        .user{
            width:100%;
            text-align:center;
            font: size 100px;
            margin: 0 0 15px 0;
        }
        .container{
                display: flex;
                flex-direction: row;
                background-color:pink;
                border-radius 5px;
                margin: 0 0 15px 0;
                padding: 5px 3px 5px 0;
                    }
        .icon{
            min-width: 35px;
            font: size 30px;
            line-height: 35px;
            text-align:center;
        }
        .forminput{
            width:95%;
            height: 35px;
            background-color:pink;
            padding: 0 0 0 15px;
            border:none;

        }
        .submit{
           
            width:100%;
            height: 35px;
            border: radius 5px;
            margin-bottom: 15px;
            border:none;
            cursor:pointer;
            color:rgb(52,56,78);



        }
        a{
            color:rgb(52,56,78);
        }
    </style>
</head>
<body>
    <main id="min">
        <form action="" id="form">
            <h1>login</h1>
            <h2 class="fa fa-user-circle user"></h2>
            <div class="container">
                <label for="number" class="fa fa-lock icon"></label>
                <input type="text" class="forminput" placeholder="Email">

            </div>
            <div class="container">
                <label for="password" class="fa fa-user icon"> </label>
                <input type="password" class="forminput" placeholder="password">

            </div>
            <button type="submit" class="fa fa-sign-in submit"></button>
            <?php
			echo $msg_error_motdepasse;
			?>
			<?php
			echo $msg_error_email;
			?>
            <b><a href="">SE CONNECTER</a>ou alors <a href="page.php">Inscrivez-vous</a></b>
        </form>
    </main>
</html>