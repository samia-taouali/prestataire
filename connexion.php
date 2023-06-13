<?php 
require 'connect.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="connexion.css">
    <title>Se connecter</title>
</head>
<body>
    <div class="main">
        <div class="logo"><img src="imgs/logo.svg" alt="" srcset=""></div>
        <div class="section">
            <form action="" method="post">
                <div class="first_inputs">
                    <div class="input1">
                        <label for="">Adresse email</label>
                        <input type="text" placeholder="email" name="email">
                    </div>
                    <div class="input1">
                        <label for="">Mot de passe</label>
                        <input type="text" placeholder="mot de passe" name="password">
                    </div>
                    <div class="btn"> <input type="submit"  value="Se connecter" name="submit"></div>
                    <p>vous n'avez pas un compte? <span><a href="inscription.php" id="word">inscrivez-vous</a></span></p>
                </div>
            </form>
        </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  $sql = "SELECT * FROM prestataire WHERE email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if ($password==$user['mot_de_passe']) {
      session_start();

      
      $_SESSION['id_prestataire'] = $user['id_prestataire'];
   
      // Redirect the user to the home page
      header('Location:nouveaux_commandes.php');
      exit();
      
    } else {
      echo' <script>alert("Mot de passe incorrect!!");</script>';
      exit();
      // $error_message = 'Invalid password';
    } 
  
  } 
  }
?>