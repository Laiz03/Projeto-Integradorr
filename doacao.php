<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PETLIVERY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Icone -->
    <link href="img/favicon.ico" rel="icon">

    <!--fontes do google  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

     <!-- Folha de estilo de fonte de ícone -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

   <!-- Folha de estilo de bibliotecas -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Folha de Estilo Bootstrap Personalizada -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Folha de estilo do modelo -->
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
                        <h6 class="text-uppercase mb-1">Telfone</h6>
                        <span>+55 (81)-3003-5005</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da barra superior-->


    <!-- Iniciar barra de navegação -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="index.php" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>PetLivery</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Menu</a>
                <a href="about.php" class="nav-item nav-link">sobre</a>
                <a href="service.php" class="nav-item nav-link">Serviços</a>
                <a href="product.php" class="nav-item nav-link">Produtos</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.php" class="dropdown-item">Plano de preços</a>
                        <a href="team.php" class="dropdown-item">O time</a>
                        <a href="testimonial.php" class="dropdown-item">Depoimento</a>
                        <a href="opcao.php" class="dropdown-item">Adoção / Doação</a>
                        <a href="carrinho.php" class="dropdown-item">Carrinho De Compras</a>
                        <a href="acompanhamento.php" class="dropdown-item">Acompanhar Seu Pedido</a>


                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active nav-contact bg-primary text-dark px-5 ms-lg-5">Cadastre-se <i class="bi bi-arrow-right"></i></a>
                <a href="login.php" class="nav-item nav-link active nav-contact bg-primary text-dark px-5 ms-lg-1">Login <i class="bi bi-arrow-right"></i></a>         

            </div>
        </div>
    </nav>
    <!-- Fim barra de navegação -->


    <!-- Início do cadastro -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Informações Do Pet</h6>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Pet: Cachorro, gato, passáro" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Peso" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="tel" class="form-control bg-light border-0 px-4" placeholder="Idade" style="height: 55px;">
                            </div>
                            <div>
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Raça" style="height: 55px;">
                            </div>
                            <div> Sexo:     
                                <input type="checkbox" name="Fêmea" value="f1"> Fêmea
                                <input type="checkbox" name="Macho" value="m2"> Macho
                            </div>
                            <div> Vacinado? 
                                <input type="checkbox"> Sim
                                <input type="checkbox"> Não
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0 px-4" placeholder="Descrição do Pet" rows="8"></textarea> 
                            </div>
                            <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Anexe A Foto Do Pet Aqui</label>
                                <input class="form-control" type="file" id="formFileDisabled" disabled>
                              </div>
                           </div>
                        </div>
                        <a href="adocao.php"><button class="btn btn-primary w-100 py-3" type="submit">Divulgar</button></a> 

                    </form>
                </div>
        </div>
    </div>
    <!-- Fim do contato -->


    <!-- Início do Rodapé -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Contato</h5>
                    <p class="mb-4">Você não é derrotado quando perde, mas sim quando você desiste.</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 jaboatao, curado, BRA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>petliveryinfo@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+55 (81)-3003-5005</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Menu</a>
                        <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre nós</a>
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
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">PETSHOP</a>. TODOS OS DIREITO RESERVADOS.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">FEITO POR <a class="text-white" href="https://htmlcodex.com">GRUPO PI</a></p>
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