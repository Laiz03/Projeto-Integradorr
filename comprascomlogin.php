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
    <br>
    <div class="border-start border-2 border-primary ps-5 mb-5" style="max-width: 600px;">
        <h6 class="text-primary text-uppercase">Seus produtos</h6>

        <img src="img/product-2.png" class="rounded float-start" alt="...">
        <img src="img/product-1.png" class="rounded d-block" alt="...">
    </div>

    <div class="container">
        <h2>Resumo da Compra</h2>
        <ul class="list-group">
          <li class="list-group-item">Produto 1 - R$ 199,00</li>
          <li class="list-group-item">Produto 2 - R$ 199,00</li>
          <li class="list-group-item">Frete - R$ 10,00</li>
          <li class="list-group-item active">Total - R$ 408,00</li>
        </ul>
        <div>
            <form> 
                <h2>Confirmação da Compra</h2>

                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" class="form-control" class="nome">
                </div>
                <div class="form-group">
                  <label for="endereco">Endereço:</label>
                  <input type="text" class="form-control" class="endereco">
                </div>
                <div class="form-group">
                  <label for="pagamento">Forma de Pagamento:</label>
                  Pix <input type="checkbox" class="pagamento">
                  Cartão <input type="checkbox" class="pagamento">
                </div>
                <div class="form-group">
                    <label for="endereco">CPF:</label>
                    <input type="text" class="form-control" class="cpf">
                </div>
                <div>
                </div>
              </form>
              <a href="finalcomlogin.php"><button type="submit" class="btn btn-primary">Confirmar Compra</button></a>
        </div>
      </div>
     <!--  Fim Produtos -->


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
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">PETSHOP</a>. TODOS OS DIREITO RESERVADOS.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">FEITO POR <a class="text-white" href="https://htmlcodex.com">GRUPO PI</a></p>
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