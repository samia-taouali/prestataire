<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="modifier_service.css">
    <title>Document</title>
</head>

<body>
    <div class="main w-100 h-100">
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

        <div class="titre" ><h1>Modifier Votre service</h1></div>
        <div class="details justify-content-center  d-flex d w-100">

            <form class=" form1 col-md-4 " action="" method="POST">
                
                <div>
                    <div class=" mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                        <input type="textl" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Min Prix</label>
                            <input type="text" class="form-control" placeholder="Min Prix" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Max Prixs</label>
                            <input type="text" class="form-control" placeholder="Max Prix" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary"style="background-color:#3EB489;border:none" type="button">Button</button>
        
                </div>
            </form>


            <div class="part2 d-flex justify-content-center col-md-3 mt-5">
                <div>
                    <img src="imgs/jus1.svg" alt="" srcset="">
                </div>
                <div class="icon m-3 ">
                    <svg width="25" height="27" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M22.0045 20.075C22.554 20.075 23 20.5062 23 21.0375C23 21.5688 22.554 22 22.0045 22H13.5397C12.9888 22 12.5442 21.5688 12.5442 21.0375C12.5442 20.5062 12.9888 20.075 13.5397 20.075H22.0045ZM11.6342 1.26922C12.8846 -0.275891 15.0748 -0.427322 16.8389 0.908608L18.684 2.30742C19.4897 2.91828 20.0406 3.72163 20.2331 4.57119C20.4481 5.51955 20.2105 6.48204 19.5654 7.27769L8.56265 20.85C8.00648 21.5366 7.17022 21.937 6.26627 21.9485L2.02128 21.9999C1.54607 21.9999 1.14387 21.6919 1.03901 21.2555L0.0779809 17.2593C-0.126437 16.4085 0.0753261 15.5268 0.63283 14.8403L2.07703 13.0577C2.41551 12.6394 3.04204 12.5649 3.47477 12.8948C3.9075 13.222 3.98316 13.8277 3.64335 14.2461L2.19915 16.0286C2.01597 16.2545 1.9496 16.5432 2.0173 16.823L2.79647 20.0646L6.24105 20.0236C6.53706 20.0197 6.81183 19.8888 6.99501 19.663L17.9977 6.09063C18.2791 5.74413 18.376 5.37197 18.2884 4.98185C18.1942 4.5699 17.8995 4.15796 17.4562 3.82301L15.6111 2.42292C14.897 1.88393 13.8895 1.60673 13.2019 2.45757L11.7484 4.24907L14.0554 6.03801C14.4841 6.36911 14.5532 6.97612 14.2094 7.38934C14.0129 7.62804 13.7235 7.75124 13.4315 7.75124C13.2138 7.75124 12.9935 7.68194 12.8103 7.53949L10.5206 5.76467L6.75608 10.409C6.41626 10.8273 5.79106 10.9031 5.35701 10.572C4.92561 10.2447 4.84995 9.63899 5.18843 9.22063L11.6342 1.26922Z"
                            fill="#3EB489" />
                    </svg>
                </div>
                <div class="part2 col-md-3">
                    <div class="part2">
                        <div class="">
                            <img src="imgs/jus1.svg" alt="" srcset="">
                        </div>
                        <div class="icon m-3 ">
                            <svg width="25" height="27" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0045 20.075C22.554 20.075 23 20.5062 23 21.0375C23 21.5688 22.554 22 22.0045 22H13.5397C12.9888 22 12.5442 21.5688 12.5442 21.0375C12.5442 20.5062 12.9888 20.075 13.5397 20.075H22.0045ZM11.6342 1.26922C12.8846 -0.275891 15.0748 -0.427322 16.8389 0.908608L18.684 2.30742C19.4897 2.91828 20.0406 3.72163 20.2331 4.57119C20.4481 5.51955 20.2105 6.48204 19.5654 7.27769L8.56265 20.85C8.00648 21.5366 7.17022 21.937 6.26627 21.9485L2.02128 21.9999C1.54607 21.9999 1.14387 21.6919 1.03901 21.2555L0.0779809 17.2593C-0.126437 16.4085 0.0753261 15.5268 0.63283 14.8403L2.07703 13.0577C2.41551 12.6394 3.04204 12.5649 3.47477 12.8948C3.9075 13.222 3.98316 13.8277 3.64335 14.2461L2.19915 16.0286C2.01597 16.2545 1.9496 16.5432 2.0173 16.823L2.79647 20.0646L6.24105 20.0236C6.53706 20.0197 6.81183 19.8888 6.99501 19.663L17.9977 6.09063C18.2791 5.74413 18.376 5.37197 18.2884 4.98185C18.1942 4.5699 17.8995 4.15796 17.4562 3.82301L15.6111 2.42292C14.897 1.88393 13.8895 1.60673 13.2019 2.45757L11.7484 4.24907L14.0554 6.03801C14.4841 6.36911 14.5532 6.97612 14.2094 7.38934C14.0129 7.62804 13.7235 7.75124 13.4315 7.75124C13.2138 7.75124 12.9935 7.68194 12.8103 7.53949L10.5206 5.76467L6.75608 10.409C6.41626 10.8273 5.79106 10.9031 5.35701 10.572C4.92561 10.2447 4.84995 9.63899 5.18843 9.22063L11.6342 1.26922Z"
                                    fill="#3EB489" />
                            </svg>
                        </div>
                    </div>
                    <div class="part2 ">
                        <div class="">
                            <img src="imgs/jus1.svg" alt="" srcset="">
                        </div>
                        <div class="icon m-3 ">
                            <svg width="25" height="27" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0045 20.075C22.554 20.075 23 20.5062 23 21.0375C23 21.5688 22.554 22 22.0045 22H13.5397C12.9888 22 12.5442 21.5688 12.5442 21.0375C12.5442 20.5062 12.9888 20.075 13.5397 20.075H22.0045ZM11.6342 1.26922C12.8846 -0.275891 15.0748 -0.427322 16.8389 0.908608L18.684 2.30742C19.4897 2.91828 20.0406 3.72163 20.2331 4.57119C20.4481 5.51955 20.2105 6.48204 19.5654 7.27769L8.56265 20.85C8.00648 21.5366 7.17022 21.937 6.26627 21.9485L2.02128 21.9999C1.54607 21.9999 1.14387 21.6919 1.03901 21.2555L0.0779809 17.2593C-0.126437 16.4085 0.0753261 15.5268 0.63283 14.8403L2.07703 13.0577C2.41551 12.6394 3.04204 12.5649 3.47477 12.8948C3.9075 13.222 3.98316 13.8277 3.64335 14.2461L2.19915 16.0286C2.01597 16.2545 1.9496 16.5432 2.0173 16.823L2.79647 20.0646L6.24105 20.0236C6.53706 20.0197 6.81183 19.8888 6.99501 19.663L17.9977 6.09063C18.2791 5.74413 18.376 5.37197 18.2884 4.98185C18.1942 4.5699 17.8995 4.15796 17.4562 3.82301L15.6111 2.42292C14.897 1.88393 13.8895 1.60673 13.2019 2.45757L11.7484 4.24907L14.0554 6.03801C14.4841 6.36911 14.5532 6.97612 14.2094 7.38934C14.0129 7.62804 13.7235 7.75124 13.4315 7.75124C13.2138 7.75124 12.9935 7.68194 12.8103 7.53949L10.5206 5.76467L6.75608 10.409C6.41626 10.8273 5.79106 10.9031 5.35701 10.572C4.92561 10.2447 4.84995 9.63899 5.18843 9.22063L11.6342 1.26922Z"
                                    fill="#3EB489" />
                            </svg>
                        </div>
                    </div>
                    <div class="part2 ">
                        <div class="">
                            <img src="imgs/jus1.svg" alt="" srcset="">
                        </div>
                        <div class="icon m-3 ">
                            <svg width="25" height="27" viewBox="0 0 23 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.0045 20.075C22.554 20.075 23 20.5062 23 21.0375C23 21.5688 22.554 22 22.0045 22H13.5397C12.9888 22 12.5442 21.5688 12.5442 21.0375C12.5442 20.5062 12.9888 20.075 13.5397 20.075H22.0045ZM11.6342 1.26922C12.8846 -0.275891 15.0748 -0.427322 16.8389 0.908608L18.684 2.30742C19.4897 2.91828 20.0406 3.72163 20.2331 4.57119C20.4481 5.51955 20.2105 6.48204 19.5654 7.27769L8.56265 20.85C8.00648 21.5366 7.17022 21.937 6.26627 21.9485L2.02128 21.9999C1.54607 21.9999 1.14387 21.6919 1.03901 21.2555L0.0779809 17.2593C-0.126437 16.4085 0.0753261 15.5268 0.63283 14.8403L2.07703 13.0577C2.41551 12.6394 3.04204 12.5649 3.47477 12.8948C3.9075 13.222 3.98316 13.8277 3.64335 14.2461L2.19915 16.0286C2.01597 16.2545 1.9496 16.5432 2.0173 16.823L2.79647 20.0646L6.24105 20.0236C6.53706 20.0197 6.81183 19.8888 6.99501 19.663L17.9977 6.09063C18.2791 5.74413 18.376 5.37197 18.2884 4.98185C18.1942 4.5699 17.8995 4.15796 17.4562 3.82301L15.6111 2.42292C14.897 1.88393 13.8895 1.60673 13.2019 2.45757L11.7484 4.24907L14.0554 6.03801C14.4841 6.36911 14.5532 6.97612 14.2094 7.38934C14.0129 7.62804 13.7235 7.75124 13.4315 7.75124C13.2138 7.75124 12.9935 7.68194 12.8103 7.53949L10.5206 5.76467L6.75608 10.409C6.41626 10.8273 5.79106 10.9031 5.35701 10.572C4.92561 10.2447 4.84995 9.63899 5.18843 9.22063L11.6342 1.26922Z"
                                    fill="#3EB489" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>





















<!-- <div class="section row d-flex w-100 ">
    <div class="section1 col-md-6 p">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="section2 col-md-6">
            <img src="imgs/jus1.svg" class="" alt="...">
        </div>

    </div>

</div> -->