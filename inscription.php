<?php 
require 'connect.php';
if(!empty($_SESSION["id_client"])){
    header("Location: home.php");
    }
    if(isset($_POST["submit"])){
    $firstname = $_POST["prénom"];
    $lastname = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query ( $conn, "SELECT * FROM client WHERE  email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){

        echo "<script> alert('Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO client (nom, prenom, numero_telephone, email, mot_de_passe) 
            VALUES ('$lastname', '$firstname', '$telephone', '$email', '$password')";  
        mysqli_query($conn, $query);
        echo"<script> alert('Registration Successful'); </script>";
        header('Location:home.php');
        }
        else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>S'inscrire</title>
</head>

<body>
    <div class="main">
        <div class="logo"><img src="imgs/logo.svg" alt="" srcset=""></div>
        <div class="section">
            <form action="" method="post">
                <div class="first_inputs">
                    <div class="input1">
                        <label for="">Nom</label>
                        <input type="text" placeholder="Nom" name="nom">
                    </div>
                    <div class="input1">
                        <label for="">Prénom</label>
                        <input type="text" placeholder="prénom" name="prénom">
                    </div>
                </div>
                <div class="input2">
                    <label for="">Email</label>
                    <input type="text" placeholder="email" name="email">
                </div>
                <div class="input2">
                    <label for="">N°téléphone</label>
                    <input type="text" placeholder="N°téléphone" name="telephone">
                </div>
                <div class="first_inputs">

                    <div class="input1">
                        <label for="">Mot de passe</label>
                        <input type="text" placeholder="mot de passse" name="password">
                    </div>

                    <div class="input1">
                        <label for="">Confirmer mot de passe</label>
                        <input type="text" placeholder="confirmer" name="confirmpassword">
                    </div>
                </div>
                <div class="btn"> <input type="submit" value="S'inscrire" name="submit"></div>
                <p>vous avez déjà un compte? <span><a href="#" id="word">connectez -vous</a></span></p>
        </div>
        </form>
    </div>
</body>

</html>