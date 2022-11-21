<?php

/*
Theme Name: novaHorizonte
Author: Miquéias Meneses
Author URI: www.miqueias-dev.com.br/
Version: 1.0.0s
 */

?>

</html>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    <style>



    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);

    .snip1135 {
        font-family: 'Raleway', Arial, sans-serif;
        text-align: center;
        text-transform: uppercase;
        font-weight: 500;
    }

    .snip1135 * {
        box-sizing: border-box;
    }

    .snip1135 li {
        display: inline-block;
        list-style: outside none none;
        margin: 0 1.5em;
        padding: 0;
    }

    .snip1135 a {

        color: black;
        position: relative;
        letter-spacing: 1px;
        text-decoration: none;
    }

    .snip1135 a:before,
    .snip1135 a:after {
        position: absolute;
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
    }

    .snip1135 a:before {
        bottom: 0;
        display: block;
        height: 3px;
        width: 0%;
        content: "";
        background-color: #90d23a;
    }

    .snip1135 a:after {
        left: 0;
        top: 0;
        padding: 0.44em 0.60em 0.60em;
        position: absolute;
        content: attr(data-hover);
        color: #00000003;
        overflow: hidden;
    }

    .snip1135 a:hover:before,
    .snip1135 .current a:before {
        opacity: 1;
        width: 90%;
    }

    .snip1135 a:hover:after,
    .snip1135 .current a:after {
        max-width: 100%;
    }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2ff89002d2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="cotainer h-10 bg-light ">
            <div class="row bg-dark justify-content-md-center">
                <div class="col-12 .col-sm-6 d-flex align-items-end flex-column">
                    <div class="w-70  d-inline-flex justify-content-end">
                        <div class="p-2 text-white">
                            <p class="d-inline" style="font-family: Sans-serif">
                                <i class="fa-solid fa-envelopes-bulk fa-xl p-1"></i>teste@teste.com
                                <i class="fa-solid fas fa-phone-square-alt fa-xl p-1"></i>(11) 9654862222
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light shadow p-1 mb-2 bg-white rounded " style="z-index: 100;">
        <div class="container pl-5 pr-5">
            <a class="navbar-brand" href="#">
                <img src="https://nhlogistica.com.br/site/wp-content/uploads/2022/06/cropped-LogoNHC.png" width="70%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right justify-content-end mt-3" id="navbarNavAltMarkup">
                <div class="navbar-nav snip1135">
                    <a class="nav-link active text-justify" aria-current="Inicio" href="#">Inicio</a>
                    <a class="nav-link text-justify" href="#" data-hover="Quem somos">Quem somos</a>
                    <a class="nav-link" href="#" data-hover="Soluções">Soluções</a>
                    <a class="nav-link disabled" data-hover="Contato">Contato</a>
                </div>
            </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" style=" margin-top:-20%" class="carousel slide carousel-fade " data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
        <div class="carousel-inner " style="z-index: -1;">
            <div class="carousel-item active">
                <img src="https://lh3.googleusercontent.com/u/0/d/15KT0Nz5y8tk_VeO-r-yYByxp4PNXwr8D=w1294-h607-iv1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://lh3.googleusercontent.com/u/0/d/1prnvmj462dB74kzbLmr2WcAkX5aZlOoC=w1294-h607-iv1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/bootstrap/ny.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block mb-70">
                <h5>...</h5>
                <p>Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
               </p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <div class="container-fluid p-0 m-0">
        
        <div class="row pr-0 pl-0 m-0"  style="background-color:#0069b5">
            <div class="col-sm-6 p-5 m-0 justify-content-md-center text-white">
                <h3 class="font-weight-bold p-1">Quem somos?</h3>
                <p class="font-weight-normal">Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                Lorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem Lorem loremLorem loremLorem loremLorem loremLorem loremLorem lorem
                </p>
            </div>
            <div class="col-sm-6 p-0 m-0">
                <img width="100%"
                    src="	https://lh3.googleusercontent.com/u/0/d/1XNjL2LpUJgPcB1fzVXLfyJoXIvReMtWw=w1294-h607-iv1">

            </div>
        </div>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->

</body>

</html>