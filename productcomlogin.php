<?php

if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PETLIVERY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- icone -->
    <link href="img/favicon.ico" rel="icon">

    <!--Fontes da Web do Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Folha de estilo de fonte de ícone -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Folha de estilo de bibliotecas -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Folha de Estilo Bootstrap Personalizada -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Folha de estilo do modelo-->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
     <!-- Início da barra superior -->
     <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Nosso escritório</h6>
                        <span>123 jaboatao, curado, BRA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email</h6>
                        <span>petliveryinfo@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Telefone</h6>
                        <span>+55 (81)-3003-5005</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da barra superior -->


     <!-- Inicio da barra de navegação -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="indexcomlogin.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>PetLivery</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="indexcomlogin.php" class="nav-item nav-link active">Menu</a>
                <a href="aboutcomlogin.php" class="nav-item nav-link">Sobre</a>
                <a href="servicecomlogin.php" class="nav-item nav-link">Serviços</a>
                <a href="productcomlogin.php" class="nav-item nav-link">Produtos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu m-0">
                        <a href="pricecomlogin.php" class="dropdown-item">Plano de preços</a>
                        <a href="teamcomlogin.php" class="dropdown-item">O time</a>
                        <a href="testimonialcomlogin.php" class="dropdown-item">Depoimento</a>
                        <a href="opcaocomlogin.php" class="dropdown-item">Adoção / Doação</a>
                        <a href="carrinhocomlogin.php" class="dropdown-item">Carrinho De Compras</a>
                        <a href="acompanhamentocomlogin.php" class="dropdown-item">Acompanhar Seu Pedido</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5"><?php echo $_SESSION['email']; ?>
                    </a>

            </div>
        </div>
    </nav>
    <!-- Fim da barra de navegação -->


    <!-- Inicio produtos -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Produtos</h6>
                <h1 class="display-5 text-uppercase mb-0">Produtos para seus melhores amigos</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="text-uppercase">Alimentos para animais de estimação de qualidade</h6>
                        <h5 class="text-primary mb-0">R$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="carrinhocomlogin.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="text-uppercase">Alimentos para animais de estimação de qualidade</h6>
                        <h5 class="text-primary mb-0">R$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="carrinhocomlogin.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-3.png" alt="">
                        <h6 class="text-uppercase">Alimentos para animais de estimação de qualidade</h6>
                        <h5 class="text-primary mb-0">R$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="carrinhocomlogin.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-4.png" alt="">
                        <h6 class="text-uppercase">Alimentos para animais de estimação de qualidade</h6>
                        <h5 class="text-primary mb-0">R$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="carrinhocomlogin.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2.png" alt="">
                        <h6 class="text-uppercase">Alimentos para animais de estimação de qualidade</h6>
                        <h5 class="text-primary mb-0">R$199.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="carrinhocomlogin.php"><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Fim Produtos -->

    <!-- Início da oferta -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Oferta especial</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">Economize 50% em todos os itens em seu primeiro pedido</h1>
                    </div>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Compre agora</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5">consulte Mais informação</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da oferta -->


    <!-- Início do plano de preços -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Plano de preços</h6>
                <h1 class="display-5 text-uppercase mb-0">Preços competitivos para serviços para animais de estimação</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basico</h2>
                        <h6 class="text-body mb-5">A melhor escolha</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>RAÇÃO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TREINAMENTO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TOSA</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TRATAMENTO</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Peça agora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Padrão</h2>
                        <h6 class="text-body mb-5">A melhor escolha</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>RAÇÃO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TREINAMENTO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TOSA</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TRATAMENTO</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Peça agora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Plus</h2>
                        <h6 class="text-body mb-5">A melhor escolha</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>RAÇÃO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TREINAMENTO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TOSA</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>TRATAMENTO</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Peça agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do plano de preços-->
    

      <!-- Início do Rodapé -->
      <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Entrar em contato</h5>
                    <p class="mb-4">Você não é derrotado quando perde, mas sim quando você desiste.</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 jaboatao, Curado, BRA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>petshopinfo@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+55 (81)-3003-5005</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Menu</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>sobre nós</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Nossos serviços</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Conheça o time</a>

                        <a class="text-body" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contate-nos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Notícias</h5>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Seu email">
                            <button class="btn btn-primary">Inscrever-se</button>
                        </div>
                    </form>
                    <h6 class="text-uppercase mt-4 mb-3">Siga-nos</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">termos e Condições</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Política de Privacidade</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Suporte ao cliente</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Pagamentos</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Ajuda</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">perguntas frequentes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">Nome do site</a>. Todos os direitos reservados.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Projetado por <a class="text-white" href="https://htmlcodex.com">Código HTML</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Rodapé -->


    <!-- De volta ao topo -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Bibliotecas JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Modelo Javascript -->
    <script src="js/main.js"></script>
</body>

</html>