<head>
  
  <title>PÁGINA INICIAL</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
  
  <!-- Barra de navegação --> 
  
  <!-- https://getbootstrap.com/docs/5.1/getting-started/introduction/ -->


  <!-- https://getbootstrap.com/docs/5.1/customize/color/ -->




  <header style="background-color: #14213d;" class="p-3  text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
       
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Sobre</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">

          <?php
               include $_SERVER['DOCUMENT_ROOT'] . '/php/usuario.php';
              if((new usuario)::checkLogin()) {
                echo '
                <a href="/html/dashboard.php" class="btn btn-outline-light me-2">Visitar Dashboard</a>
                <a href="/html/editar.php" class="btn btn-outline-light me-2">Editar Usuário</a>
                <a href="/html/desconectar.php" class="btn btn-outline-danger me-2">Desconectar-se</a>
                
                ';
              }else{
                echo '
                <a href="/html/login.php" class="btn btn-outline-light me-2">Logar</a>
                <a href="/html/register.php" class="btn btn-info text-white" style="font-weight:bold; ">Cadastrar-se</a>
                ';
              }

         ?>
         


        </div>
      </div>
    </div>
  </header>

  <!-- Pé do site -->
  <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Início</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sobre</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Reclame ZN, Inc</p>
  </footer>
</div>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
