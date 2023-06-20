<?php 
require 'connect.php';
if(!empty($_SESSION['id_prestataire'])){

    $id_prestataire=$_SESSION['id_prestataire'];
    $result = mysqli_query($conn, "SELECT * FROM prestataire WHERE id_prestataire = $id_prestataire");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location:home.php");
}
?>
<?php
if (isset($_POST["edit"])){
    $prenom=$_POST['prenom']; 
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $password=$_POST['password'];
    $query="UPDATE prestataire SET prenom='$prenom',nom='$nom',email='$email', numero_telephone='$telephone',mot_de_passe='$password' WHERE id_prestataire='$id_prestataire'";
    if (mysqli_query($conn,$query)){
        header("refresh:0");
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <!-- <link rel="stylesheet" href="inscription.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>profil</title>
</head>
<style>
</style>
<body>
    <div class="main h-100">
    <nav class="nav">
            <div class="logo"> <img src="imgs/smalllogo.svg" alt="logo"></div>
            <div class="links">
                <div><span><a href="nouveaux_commandes.php">Les commandes</a></span></div>
                <div><span><a href="mes_services.php">Service</a></span></div>
            </div>
            <div class="icons">
                <!-- icon1 -->
                <a href="profil.php">
                    <div class="navbar_icons">
                        <svg viewBox="0 0 31 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.2826 33.5452C27.3072 34.1129 24.9727 34.3749 22.2341 34.3749H8.76562C6.02704 34.3749 3.69253 34.1129 1.71716 33.5452C2.21101 27.8686 8.20444 23.3927 15.4999 23.3927C22.7953 23.3927 28.7888 27.8686 29.2826 33.5452Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M23.536 9.44136C23.536 13.7644 19.9444 17.2796 15.4998 17.2796C11.0552 17.2796 7.46371 13.7644 7.46371 9.44136C7.46371 5.11839 11.0552 1.625 15.4998 1.625C19.9444 1.625 23.536 5.11839 23.536 9.44136Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
                <!-- icon2 -->
                <a href="déconnexion.php">
                    <div class="navbar_icons">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.0789 32H21.8764C14.9592 32 11.6252 29.2736 11.0488 23.1665C10.9864 22.5278 11.4538 21.9513 12.1082 21.889C12.7469 21.8267 13.3233 22.3096 13.3857 22.9484C13.8375 27.8403 16.1432 29.6631 21.892 29.6631H22.0945C28.4353 29.6631 30.6787 27.4197 30.6787 21.0789V10.9211C30.6787 4.58033 28.4353 2.3369 22.0945 2.3369H21.892C16.1121 2.3369 13.8063 4.19084 13.3857 9.17623C13.3078 9.81499 12.7781 10.2979 12.1082 10.2356C11.4538 10.1889 10.9864 9.61245 11.0332 8.9737C11.5629 2.77312 14.9124 0 21.8764 0H22.0789C29.7284 0 33.0001 3.27166 33.0001 10.9211V21.0789C33.0001 28.7283 29.7284 32 22.0789 32Z"
                                fill="black" />
                            <path
                                d="M21.5172 17.1684H1.45104C0.81229 17.1684 0.282593 16.6387 0.282593 16C0.282593 15.3612 0.81229 14.8315 1.45104 14.8315H21.5172C22.156 14.8315 22.6857 15.3612 22.6857 16C22.6857 16.6387 22.1716 17.1684 21.5172 17.1684Z"
                                fill="black" />
                            <path
                                d="M18.0427 22.3876C17.7467 22.3876 17.4507 22.2786 17.217 22.0449C16.7652 21.5931 16.7652 20.8453 17.217 20.3935L21.6104 16.0001L17.217 11.6067C16.7652 11.1549 16.7652 10.4071 17.217 9.95531C17.6688 9.5035 18.4166 9.5035 18.8684 9.95531L24.0875 15.1744C24.5393 15.6262 24.5393 16.374 24.0875 16.8258L18.8684 22.0449C18.6347 22.2786 18.3387 22.3876 18.0427 22.3876Z"
                                fill="black" />
                        </svg>
                    </div>
                </a>
            </div>
        </nav>
        <div class="details h-100 w-100  d-flex flex-row h-100">
            <section class="col-md-2 h-100">
                <div class="section1 h-100">
                    <div class="titre1">
                        <h3>Mon profil</h3>
                    </div>
                    <div class="list">
                   <ul class="p-0 text-start">
                        <a href="profil.php">
                            <li class="sideBarItems px-2">Mes informations</li>
                        </a>
                        <a href="nouveaux_commandes.php">
                            <li class="sideBarItems px-2">Nouveaux commandes</li>
                        </a>
                        <a href="commandes_validée.php">
                            <li class="sideBarItems px-2">Commandes Validée</li>
                        </a>
                        <a href="commandes_en_cours.php">
                            <li class="sideBarItems px-2">Commandes en cours</li>
                        </a>
                        <a href="commandes_livrer.php">
                            <li class="sideBarItems px-2">Commandes livrée</li>
                        </a>
                        <a href="commandes_rejeter.php">
                            <li class="sideBarItems px-2">Commandes rejetée</li>
                        </a>
                    </ul>
                </div>
            </section>

            <div class="section2 w-100 d-flex justify-content-center">
                <div class="section w-50">
                    <div style="text-align:center">
                        <h4>Mes informations</h4>
                    </div>
                    <?php
        $sql="SELECT*FROM prestataire WHERE id_prestataire ='$id_prestataire'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
           ?>
                    <form action="" method="post">
                        <div class="inputs">
                            <div class="input">
                                <label for="">Nom</label>
                                <input type="text" name="nom" required value="<?php echo $row["nom"]?>">
                                <div class="input">
                                    <label for="">Prénom</label>
                                    <input type="text" name="prenom"required value="<?php echo $row["prenom"]?>">
                                </div>
                                <div class="input">
                                    <label for="">Email</label>
                                    <input type="text" name="email"required value="<?php echo $row["email"]?>">
                                </div>
                                <div class="input">
                                    <label for="">N°téléphone</label>
                                    <input type="text" name="telephone"required value="<?php echo $row["numero_telephone"]?>">
                                </div>
                                <div class="input">
                                    <label for="">Mot de passe</label>
                                    <input type="text" name="password"required value="<?php echo $row["mot_de_passe"]?>">
                                </div>
                                <div class="input">
                                    <input type="submit" value="Modifier" name="edit" class="button">
                                </div>
                            </div>

                        </div>
                    </form>
                    <?php
         }
        ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>