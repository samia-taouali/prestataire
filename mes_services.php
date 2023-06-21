
<?php 
require_once("connect.php");
if(isset($_GET["id_service"])){
    header("location:modifier_service.php?id_service".$_GET["id_service"]);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mes_services.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Commandes en cours</title>
</head>

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
        <!-- card -->


        <div class="cardSection">
            <?php
        $id_prestataire = $_SESSION['id_prestataire'];
        $sql = "SELECT * FROM gallerie g INNER JOIN services s ON g.id_service=s.id_service WHERE s.id_prestataire='$id_prestataire' AND g.type='primaire'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="details row w-50">
                <!-- Reste du code HTML -->
                <div id="carouselExampleInterval" class="carousel slide col-md-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?php echo $row["image"]; ?>" class="d-block w-100" alt="...">
                        </div>

                        <?php
                        $sql_image_secondaire = "SELECT * FROM gallerie g INNER JOIN services s ON g.id_service=s.id_service WHERE s.id_prestataire='$id_prestataire' AND g.type='secondaire'";
                        $result_image = mysqli_query($conn, $sql_image_secondaire);

                        while ($rows = mysqli_fetch_assoc($result_image)) {
                            ?>
                        <div class="carousel-item" data-bs-interval="10000">
                            <img src="<?php echo $rows["image"]; ?>" class="d-block w-100" alt="...">
                        </div>
                        <?php
                        }
                        ?>
                    </div>


                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target=" #carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="parte2 col-md-7 row d-flex">

                    <div class="titre">
                        <h4 class="my-0">Description</h4>
                    </div>
                    <div class="description ">
                        <p class="my-0 ">J<?php echo $row["description"]; ?>
                        </p>
                    </div>
                    <div class="prix d-flex justify-content-around">
                        <div class="fw-bold"><span>Max prix: <?php echo $row["max_prix"]; ?> DH</span></div>
                        <div class="fw-bold"><span> Min Prix :<?php echo $row["min_prix"]; ?> DH</span></div>
                    </div>
                </div>

                <div class="icon  col-md-1 d-flex align-content-center flex-wrap">
                    <a href="modifier_service.php">
                        <div class="iconA">
                            <svg width="20" height="21" viewBox="0 0 38 41" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M33.2692 13.94C34.0952 14.008 34.7112 14.73 34.6452 15.556C34.6332 15.692 33.5492 29.114 32.9252 34.744C32.5372 38.238 30.2292 40.364 26.7452 40.428C24.0792 40.474 21.5072 40.5 18.9932 40.5C16.2832 40.5 13.6412 40.47 11.0272 40.416C7.6832 40.35 5.3692 38.182 4.9912 34.758C4.3612 29.078 3.2832 15.69 3.2732 15.556C3.2052 14.73 3.8212 14.006 4.6472 13.94C5.4612 13.918 6.1972 14.49 6.2632 15.314C6.26958 15.4008 6.71028 20.8681 7.19052 26.2774L7.28698 27.3569C7.52886 30.0457 7.77405 32.6293 7.9732 34.428C8.1872 36.374 9.2372 37.378 11.0892 37.416C16.0892 37.522 21.1912 37.528 26.6912 37.428C28.6592 37.39 29.7232 36.406 29.9432 34.414C30.5632 28.826 31.6432 15.45 31.6552 15.314C31.7212 14.49 32.4512 13.914 33.2692 13.94ZM23.1908 0.50061C25.0268 0.50061 26.6408 1.73861 27.1148 3.51261L27.6228 6.03461C27.787 6.86136 28.5125 7.46512 29.3526 7.47839L35.916 7.47861C36.744 7.47861 37.416 8.15061 37.416 8.97861C37.416 9.80661 36.744 10.4786 35.916 10.4786L29.4112 10.4783C29.4011 10.4785 29.3909 10.4786 29.3808 10.4786L29.332 10.4766L8.58324 10.4784C8.56711 10.4785 8.55096 10.4786 8.5348 10.4786L8.504 10.4766L2 10.4786C1.172 10.4786 0.5 9.80661 0.5 8.97861C0.5 8.15061 1.172 7.47861 2 7.47861L8.562 7.47661L8.76404 7.46382C9.51662 7.36618 10.1421 6.79461 10.2948 6.03461L10.7808 3.60261C11.2748 1.73861 12.8888 0.50061 14.7248 0.50061H23.1908ZM23.1908 3.50061H14.7248C14.2448 3.50061 13.8228 3.82261 13.7008 4.28461L13.2348 6.62461C13.1756 6.921 13.0893 7.20664 12.979 7.47915H24.9372C24.8267 7.20664 24.7403 6.921 24.6808 6.62461L24.1948 4.19261C24.0928 3.82261 23.6708 3.50061 23.1908 3.50061Z"
                                    fill="#EC341B" />
                            </svg>
                        </div>
                    </a>
                    <a href="modifier_service.php">
                        <div class="iconB">
                            <svg width="20" height="21" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.4842 0.57341C20.3122 0.57341 20.9842 1.24541 20.9842 2.07341C20.9842 2.90141 20.3122 3.57341 19.4842 3.57341H12.0062C6.83824 3.57341 3.50024 7.11341 3.50024 12.5914V29.2194C3.50024 34.6974 6.83824 38.2374 12.0062 38.2374H29.6542C34.8222 38.2374 38.1622 34.6974 38.1622 29.2194V21.1634C38.1622 20.3354 38.8342 19.6634 39.6622 19.6634C40.4902 19.6634 41.1622 20.3354 41.1622 21.1634V29.2194C41.1622 36.4074 36.5362 41.2374 29.6542 41.2374H12.0062C5.12424 41.2374 0.500244 36.4074 0.500244 29.2194V12.5914C0.500244 5.40341 5.12424 0.57341 12.0062 0.57341H19.4842ZM36.9034 2.33061L39.3374 4.76461C40.5234 5.94861 41.1754 7.52261 41.1735 9.19861C41.1735 10.8746 40.5214 12.4466 39.3374 13.6286L24.3194 28.6466C23.2174 29.7486 21.7494 30.3566 20.1894 30.3566H12.6974C12.2934 30.3566 11.9054 30.1926 11.6234 29.9026C11.3414 29.6146 11.1874 29.2246 11.1974 28.8186L11.3854 21.2606C11.4234 19.7566 12.0294 18.3426 13.0934 17.2766L28.0414 2.33061C30.4854 -0.10939 34.4594 -0.10939 36.9034 2.33061ZM26.8102 7.80261L15.2154 19.3986C14.6974 19.9166 14.4034 20.6046 14.3854 21.3346L14.2354 27.3566H20.1894C20.9494 27.3566 21.6614 27.0626 22.1994 26.5246L33.8642 14.8566L26.8102 7.80261ZM30.1614 4.45261L28.9302 5.68061L35.9842 12.7366L37.2174 11.5066C37.8334 10.8906 38.1734 10.0706 38.1734 9.19861C38.1734 8.32461 37.8334 7.50261 37.2174 6.88661L34.7834 4.45261C33.5094 3.18261 31.4374 3.18261 30.1614 4.45261Z"
                                    fill="#3EB489" />
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- fin card -->
            </div>
        </div>
        <?php
                
}

?>
    </div>



    <!-- fin amin -->
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>