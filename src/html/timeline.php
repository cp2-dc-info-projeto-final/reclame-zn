<?php
      require_once __DIR__.'/../sql/sql.php';
      require_once __DIR__ . '/../php/postagem.php';
      
        
      require_once __DIR__ . '/../php/usuario.php';
      $user_ = new usuario();
      if(!$user_->checkLogin()){
          header("Location: html/login.php");
          exit;
      }
      $user = $user_->get();
      $nome = $user['nome'];
    
  ?>
      
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Reclame ZN</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Reclame ZN">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="../vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../css/theme.css">
		<link rel="stylesheet" href="../css/theme-elements.css">
		<link rel="stylesheet" href="../css/theme-blog.css">
		<link rel="stylesheet" href="../css/theme-shop.css">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="../css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">

		<!-- Head Libs -->
		<script src="../vendor/modernizr/modernizr.min.js"></script>

	</head>
    <body data-plugin-page-transition>
        <div class="body">
        <header style="background-color:#14213D;" id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div style="background-color:#14213D;" class="header-body border-top-0">
                    <div class="header-container container-fluid px-lg-4">
                        <div class="header-row" style="background-color:#14213D;">
                            <div  class="header-column header-column-border-right flex-grow-0">
                                <div class="header-row pr-4">
                                    <div class="header-logo">
                                        
                                    <a href="../index.php"> 
                                    <img alt="RECLAMEZN" src="../img/header/logo.png" class="btn" height="85" width="105">
                    
                                    </a>	
                                    </div>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links justify-content-center">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse header-mobile-border-top">
                                                <ul class="nav nav-pills" id="mainNav">
                                            

                        


                                <!-- ÁREA DE PESQUISA -->
                                <div class="header-nav-features header-nav-features-no-border p-static">
                                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
                                    <div class="container">
                                        <div class="row h-100 d-flex">
                                        <div class="col h-100 d-flex">
                                            <form role="search" class="d-flex h-100 w-100" action="../busca.php" method="post">
                                            <div class="big-search-header input-group">
                                                <input class="form-control text-1" id="headerSearch" name="pesquisar" type="search" value="" placeholder="Digite o nome do usuário...">
                                                
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                                                        
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                                                <!--DASHBOARD-->
                                                <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
                            <div class="header-column header-column-border-right flex-grow-0 justify-content-center">
                                <div class="justify-content-end">
                                    <a style="background-color:#FCA311;" class="btn btn text-white font-weight-bold" href="dashboard.php">Dashboard</a>
                                </div>
                            </div>
                        </div>
                                                <!--DESCONECTAR-->
                                                <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
                            <div class="header-column header-column-border-right flex-grow-0 justify-content-center">
                                <div class="justify-content-end">
                                    <a style="background-color:#FCA311;" class="btn text-white font-weight-bold" href="desconectar.php">Desconectar</a>
                                </div>
                            </div>
                        </div>
        <div class="header-column header-column-border-left flex-grow-0 justify-content-center">

                    <!--BUSCAR USUÁRIO-->
                        <div class="header-row pl-4 justify-content-end">
                            <div class="header-nav-"></div>
                                <div class="header-nav-features-search-reveal-container">
                                    <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal d-inline-flex">
                                    <a href="#" style="background-color:#E5E5E5;" class="header-nav-features-search-show-icon d-inline-flex text-decoration-none btn text-dark font-weight-bold">Buscar Usuário </a>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        
    <!--INÍCIO DOS POSTS-->
        <div class="container container-fluid">
            
            <div class="row mt-5 pt-3">
                <div class="col-md-12">
                    <div class="blog-posts">
                        
                    <div class="post-content">

                            
 
                        
                        
<?php
        
        $idusuario = $_GET["id"];
        
        $sql = new Sql();
        $query = "SELECT nome
                  FROM tb_usuarios
                  WHERE id = $idusuario";
        foreach($sql->select($query) as $row)
    {
        $nome = $row['nome'];




    }


        $query = "SELECT date_format(postagem_tempo, '%d/%m/%Y %H:%i') tempop,
                  idpostagem, postagem_texto, curtida, idusuario
           FROM tb_postagens
           WHERE idusuario = $idusuario
           ORDER BY idpostagem desc ";
										
   ?>     <h1>Timeline de "<?php echo "$nome"; ?>"</h1>
	<?php										
		foreach($sql->select($query) as $row){
												
                                                
        echo "<h4>".$row['postagem_texto']."</h4>";
?>
                                                <div class="post-meta">
                                                <?php
                                                
                                                $idusuario= $row['idusuario'];
                                               
                                                    
                                                  echo "<span><i class= 'far fa-comments'></i> " .$row['tempop']."</span><hr>";
                                                  ?>	
                                                </div>
                                                <?php    
                                            }
                                               
                                            ?>
                                                </div>    
                                                </article>                                            
                    
                </div>
                
            </div>

        </div>
    </div>
    </div>
    
    <footer id="footer">
				<div class="container container-lg-custom">
					<div class="footer-ribbon">
						<span>Se liga</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							
							
							<p class="mb-0"><a href="faq.php" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">F.A.Q. ZN</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container container-lg-custom py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<a href="index.php" class="logo pr-0 pr-lg-3">
									<h5 alt=""  class="opacity-10" height="32"> RECLAMEZN </h5>
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2021. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
</div>   
<!-- Vendor -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="../vendor/popper/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="../vendor/lazysizes/lazysizes.min.js"></script>
<script src="../vendor/isotope/jquery.isotope.min.js"></script>
<script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../vendor/vide/jquery.vide.min.js"></script>
<script src="../vendor/vivus/vivus.min.js"></script>
<script src="../vendor/jquery.instagramfeed/jquery.instagramFeed.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="../js/theme.js"></script>


<!-- Theme Custom -->
<script src="../js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="../js/theme.init.js"></script>

<!-- Examples -->
<script src="../js/examples/examples.instagramFeed.js"></script>

</body>										
					
								<!--número de páginas (separador de páginas)-->



<!--
								<ul class="pagination float-right">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>

							</div>
						</div>
						
					</div>

				</div>
			</div>
 -->
 </html>