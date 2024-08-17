<?php
    //Iniciar sessão 
    session_start();
    
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    
    <meta charset="UTF-8">  
    
    <title>Area Logada</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    
    
    
    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        font: 14px arial; display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        
    }
    
    .wrapper {
        margin-top: 50px;
        width: 360px;
        padding: 20px;
        color: azure;
        background: rgb(2, 0, 36);
        background: linear-gradient (90deg, rgba(2, 0, 36, 1) 0%, rgba(91, 2, 2, 1) 100%, rgba(255, 0, 0, 1) 100%); 
        border-radius: 20px 12px;
    }
    </style>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-ba-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbar SupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Sair da Conta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
            Atualizar Senha
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a href="Alterarsenha.php" class="btn btn-warning">Redefinir sua senha</a></li>
          </ul>
        </li>
        <li class="nav-item">
           <a class="nav-link disabled">Disabled</a>
        </li>
      </ul> 
    </div> 
</div>
</nav>
<div class="container-fluid">
    <div class="shadow-lg p-3 mb-5 bg-body rounded"><h1 class="my-5">Olá, <b><?php echo htmlspecialchars ($_SESSION["nomeUsuario"]); ?></b>. Seja bem vindo.</h1> 
    </div>
</div>
<main>
   <section class="py-5 text-center container">
    <div class="row py-lg-5">
       <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Minha área logada!!!!</h1>
       </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
   
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7QUinvuxaMA?si=iWZHPLirnnEJXgcE" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay: clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Curta nossos videos!!!</p>
            </div>
           </div>
        </div>

       </div>
    </div> 
  </div>
</main>
<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Topo</a>
    </p>
    <p class="mb-1">Estamos utilizando &copy; Bootstrap!</p>
    <p class="mb-0">Novo Bootstrap? <a href="/">Visite</a> a página <a href="../getting-started/introduction/">ou nosso guia</a>.</p> 
  </div>
</footer>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>