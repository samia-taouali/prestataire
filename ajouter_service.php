<?php 
require_once("connect.php");
if(empty($_SESSION["id_prestataire"])){
    header("Location: connexion.php");
}
if(isset($_POST["submit"])){
  $min_prix = $_POST["min_prix"];
  $max_prix = $_POST["max_prix"];
  $titre = $_POST["titre"];
  $description = $_POST["description"];
  $categorie = $_POST["categorie"];

  $sql = "INSERT INTO `services`(`image_categorie`, `titre`, `description`, `categorie`, `min_prix`, `max_prix`, `id_prestataire`)VALUES(NULL,'$titre','$description','$categorie','$min_prix','$max_prix',{$_SESSION["id_prestataire"]})";
  $query = mysqli_query($conn,$sql);
  if ($conn->query($sql) === TRUE) {
    $id_service = $conn->insert_id;
    include_once("image_service.php");

  }
    
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouter_service.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>S'inscrire</title>
</head>

<body>
    <div class="main ">
        <nav class="nav">
            <div class="logo"> <img src="imgs/smalllogo.svg" alt="logo"></div>
            <div class="links">
                <div><span><a href="">Home</a></span></div>
                <div><span><a href="">Services</a></span></div>
                <div><span><a href="">About us</a></span></div>
            </div>
            <div class="icons">
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
                <div class="navbar_icons">
                    <svg viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.0789 32H21.8764C14.9592 32 11.6252 29.2736 11.0488 23.1665C10.9864 22.5278 11.4538 21.9513 12.1082 21.889C12.7469 21.8267 13.3233 22.3096 13.3857 22.9484C13.8375 27.8403 16.1432 29.6631 21.892 29.6631H22.0945C28.4353 29.6631 30.6787 27.4197 30.6787 21.0789V10.9211C30.6787 4.58033 28.4353 2.3369 22.0945 2.3369H21.892C16.1121 2.3369 13.8063 4.19084 13.3857 9.17623C13.3078 9.81499 12.7781 10.2979 12.1082 10.2356C11.4538 10.1889 10.9864 9.61245 11.0332 8.9737C11.5629 2.77312 14.9124 0 21.8764 0H22.0789C29.7284 0 33.0001 3.27166 33.0001 10.9211V21.0789C33.0001 28.7283 29.7284 32 22.0789 32Z"
                            fill="black" />
                        <path
                            d="M21.5172 17.1684H1.45104C0.81229 17.1684 0.282593 16.6387 0.282593 16C0.282593 15.3612 0.81229 14.8315 1.45104 14.8315H21.5172C22.156 14.8315 22.6857 15.3612 22.6857 16C22.6857 16.6387 22.1716 17.1684 21.5172 17.1684Z"
                            fill="black" />
                        <path
                            d="M18.0427 22.3876C17.7467 22.3876 17.4507 22.2786 17.217 22.0449C16.7652 21.5931 16.7652 20.8453 17.217 20.3935L21.6104 16.0001L17.217 11.6067C16.7652 11.1549 16.7652 10.4071 17.217 9.95531C17.6688 9.5035 18.4166 9.5035 18.8684 9.95531L24.0875 15.1744C24.5393 15.6262 24.5393 16.374 24.0875 16.8258L18.8684 22.0449C18.6347 22.2786 18.3387 22.3876 18.0427 22.3876Z"
                            fill="black" />
                    </svg></i>
                </div>
            </div>
        </nav>



        <div class="section d-flex justify-content-center">
            <form class="w-50 mb-5" action="" method="post" enctype="multipart/form-data">
            <h2 class="text-center mb-3">Ajouter un Service cate</h2>
                <div class="first_inputs row my-3">
                    <div class="input1 col-md-6">
                        <label for="">min_prix</label>
                        <div><input class="form-control" type="text" placeholder="Nom" name="min_prix"></div>
                    </div>
                    <div class="input1 col-md-6">
                        <label for="">max_prix</label>
                       <div><input class="form-control" type="text" placeholder="prénom" name="max_prix"></div>
                    </div>
                </div>
                <div class="input2 my-3">
                    <label for="">titre</label>
                    <input class="form-control" type="text" placeholder="email" name="titre">
                </div>
                <div class="input2 my-3">
                    <label for="">description</label>
                    <input class="form-control" type="text" placeholder="email" name="description">
                </div>
                <div class="input1 my-3">
                        <label for="">choisir une categorie</label>
                    <div>
                    <select name="categorie" id="" class="form-select col-md-12">
                            <option value="" selected>Catégorie</option>
                            <option value="Beldi Couture"> Beldi Couture</option>
                            <option value="Soins du hammam"> Soins du hammam</option>
                            <option value="Beldi Cuisine"> Beldi Cuisine</option>
                            <option value="bijoux"> bijoux</option>
                            <option value="produits naturel"> produits naturel</option>
                            <option value="recettes faites maison"> recettes faites maison</option>
                        </select>
                    </div>
                </div>

                <div class="first_inputs my-3 row">
                <div class="input2 col-md-6">
                    <label for="">image principale</label>
                    <div><input class="form-control" type="file"  name="image_principale"></div>
                </div>
                    <div class="input1 col-md-6">
                        <label for="">images</label >
                        <div><input class="form-control" type="file"  name="images[]" multiple></div>
                    </div>

                </div>
            
                <div class="btn col-md-12 p-0 btnsubmit"> <input class="form-control" type="submit" value="S'inscrire" name="submit"></div>

        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>