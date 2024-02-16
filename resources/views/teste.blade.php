<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <style>
        body {

            padding-top: 100px; /* Ajusta o espaço do navbar no topo */
            background-color:;
        }

        .carousel {
            margin-top: 70px; /* Adicione um espaço acima do carrossel */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-x1 navbar-dark fixed-top pt-3 pb-3 shadow-lg" style="background-color: wheat;">
        <a class="navbar-brand" href="#"><img style="height: 100px;" src="/img/logos/logo.png" alt="logo"></a>
        <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-5 mt-x1-0">
                <li class="nav-item ms-5">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Adicione esta seção abaixo do menu -->
    <div class="container mt-5">
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="border-radius: 20px;" src="/img/slide1.jpg" class="d-block w-100" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img style="border-radius: 20px;" src="/img/slide2.jpg" class="d-block w-100" alt="Imagem 2">
                </div>
                <div class="carousel-item">
                    <img style="border-radius: 20px;" src="/img/slide3.jpg" class="d-block w-100" alt="Imagem 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Primeiro player de vídeo -->
            <div class="col-md-4">
                <div class="video-player">
                    <!-- Substitua o link abaixo pelo link do seu vídeo -->
                    <iframe width="100%" height="200" src="/img/video1.mp4" frameborder="0" allowfullscreen></iframe>
                    <div class="video-title">Avaliações</div>
                </div>
            </div>

            <!-- Segundo player de vídeo -->
            <div class="col-md-4">
                <div class="video-player">
                    <!-- Substitua o link abaixo pelo link do seu vídeo -->
                    <iframe width="100%" height="200" src="/img/Video2.mp4" frameborder="0" allowfullscreen></iframe>
                    <div class="video-title">Avaliações</div>
                </div>
            </div>

            <!-- Terceiro player de vídeo -->
            <div class="col-md-4">
                <div class="video-player">
                    <!-- Substitua o link abaixo pelo link do seu vídeo -->
                    <iframe width="100%" height="200" src="/img/video3.mp4" frameborder="0" allowfullscreen></iframe>
                    <div class="video-title">Avaliações</div>
                </div>
            </div>
        </div>

        <!-- Texto "Lorem Ipsum" -->
        <div class="lorem-ipsum">
            <h3>Lorem Ipsum</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non
                tortor nec quam vehicula fringilla. Duis facilisis euismod ex, vel
                fermentum velit fermentum at. Curabitur auctor libero ac luctus
                dignissim. Integer varius orci vel tempor lacinia. Sed consectetur,
                libero nec iaculis feugiat, dui odio cursus lacus, nec sagittis ligula
                metus vel libero.
            </p>
        </div>

    </div>
    <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="copyright">
                        &copy; 2024 Sua Empresa. Todos os direitos reservados.
                    </div>
                    <div class="secure-purchase">
                        Compra segura | <a href="#">Política de Privacidade</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
