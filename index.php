<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!--CSS PROJETO-->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

     <!-- JavaScript Bootstrap -->
     <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
     crossorigin="anonymous"
   ></script>

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>iMovi</title>
</head>
<body>
    <!--NAVBAR-->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-primary-color">
        <div class="container py-3">
            <a href="#" class="navbar-brand">
                <img src="img/imovi-icon.png" alt="imove">
                <span class="primary-color">iMovi</span>
            </a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse"
                data-bs-target="#navbar-items"
                aria-controls="navbar-items"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
            <i class="bi bi-list"></i>
            </button>
            <div id="navbar-items" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-tem">
                        <a href="index.php" class="nav-link primary-color active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-tem">
                        <a href="#featured-container" class="nav-link primary-color" aria-current="page">Projetos</a>
                    </li>
                    <li class="nav-tem">
                        <a href="#info-container" class="nav-link primary-color" aria-current="page">Imóveis</a>
                    </li>
                    <li class="nav-tem">
                        <a href="#footer" class="nav-link primary-color" aria-current="page">Contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- SLIDER -->
    <div class="container" id="slider-container">
        <div class="carousel slide" id="slider" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button class="active" type="button" data-bs-target="#slider" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                <button class="active" type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button class="active" type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/banner-1.jpg" alt="Casa 1" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Casas Planejadas</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="img/banner-2.jpg" alt="Casa 2" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Projetos Complexos</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/banner-3.jpg" alt="Casa 3" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Projetos inovadores</h5>
                        <a href="#" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
            </div>
            <button 
            class="carousel-control-prev" 
            type="button" data-bs-target="#slider" 
            data-bs-slide="prev"
            >
            <i class="bi bi-chevron-compact-left"></i>
            <span class="visually-hidden">Previous</span>
            </button>

            <button 
            class="carousel-control-next" 
            type="button" data-bs-target="#slider" 
            data-bs-slide="next"
            >
            <i class="bi bi-chevron-compact-right"></i>
            <span class="visually-hidden">Previous</span>
            </button>
        </div>
        <!--MINI BANNERS-->
        <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-box primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Projetos completos</h5>
                            <p class="card-text secondary-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-layers primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Você participa também</h5>
                            <p class="card-text secondary-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-lightning-charge primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Adiantamento de entregas</h5>
                            <p class="card-text secondary-color">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
        <div class="col-12">
            <h2 class="title primary-color">Trabalhos em destaques</h2>
            <p class="subtitle secondary-color">Conheça nossos projetos mais desafiadores</p>
        </div>
        <div class="col-12" id="featured-images">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-2.jpg" alt="Projeto 2" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-3.jpg" alt="Projeto 3" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-4.jpg" alt="Projeto 4" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-5.jpg" alt="Projeto 5" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-6.jpg" alt="Projeto 6" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INFO -->
    <div class="container" id="info-container">
        <div class="col-12">
            <h2 class="title primary-color">Detalhes Importantes</h2>
            <p class="subtitle secondary-color">Saiba mais sobre a experiência da nossa incrível equipe</p>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-5" id="info-banner">
                    <img src="img/infobanner.jpg" alt="Informações da empresa" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="title primary-color">Estes dados fazem a diferença</h2>
                            <p class="subtitle secondary-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, veritatis. Natus sint ex provident eveniet dolor, aspernatur culpa in error sit quibusdam ipsam, inventore cum, alias repellendus impedit deserunt reprehenderit!</p>

                        </div>
                        <div class="col-12" id="info-numbers">
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="primary-color">18</h3>
                                    <p class="secondary-color">Anos na construção civil</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="primary-color">95</h3>
                                    <p class="secondary-color">Projetos Executados</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="primary-color">63</h3>
                                    <p class="secondary-color">Clientes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="container-fluid bg-dark-color" id="footer">
        <div class="container">
            <div class="row">
                <!--FOOTER TOP-->
                <div class="col-12" id="footer-top">
                    <div class="row justify-content-between">
                        <div class="col-4"><h2>iMovi</h2></div>
                        <div class="col-4" id="social-icons">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-youtube"></i>
                            <i class="bi bi-twitter"></i>
                        </div>
                    </div>
                </div>
                <!-- FOOTER DETAILS -->
                <div class="col-12" id="footer-details">
                    <div class="row">
                        <div class="col-12 col-md-4" id="news-container">
                            <h4>Fique por dentro das novidades</h4>
                            <p class="secondary-color">Inscreva-se para saber em primeira mão</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Digite seu e-mail">
                                </div>
                                <button type="submit" class="btn btn-dark">Inscrever</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-4" id="contact-container">
                            <h4>Formas de contato</h4>
                            <p class="secondary-color">(48)9999-9999</p>
                            <p class="secondary-color">contato@imovi.com</p>
                        </div>
                        <div class="col-12 col-md-4" id="links-container">
                            <div class="row">
                                <h4>Você pode estar procurando por:</h4>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Projetos</a></li>
                                        <li><a href="#" class="secondary-color">Imóveis</a></li>
                                        <li><a href="#" class="secondary-color">Vendas</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="secondary-color">Contratar</a></li>
                                        <li><a href="#" class="secondary-color">Trabalhe conosco</a></li>
                                        <li><a href="#" class="secondary-color">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER BOTTOM -->
                <div class="col-12" id="footer-bottom">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">iMovi &copy; 2022</p>
                        </div>
                        <div class="col-12 col-md-3">
                            <p class="secondary-color">Realizamos o seu projeto <i class="bi bi-heart"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>