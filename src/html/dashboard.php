<?php
        include __DIR__ . '/../php/usuario.php';
        
        $user_ = new usuario();
        if(!$user_->checkLogin()){
            header("Location: reclamezn/html/login.php");
            exit;
        }
        $user = $user_->get();


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
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

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
	<body data-plugin-page-transition class="dark">
		<div class="body">

        <style>
            .header-color{
                background-color: #101010 !important;
            }
        </style>

		<<header style="background-color:#14213D;" id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
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
                                                            
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="justify-content-end">
                                        <a class="btn text-white font-weight-bold"  style='background-color:#FCA311;' href="desconectar.php">Desconectar</a>
								</div>
                                
							</div>
							<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="justify-content-end">
                                        <a class="btn text-white font-weight-bold"  style='background-color:#FCA311;' href="editar.php">Editar Minha Conta</a>
								</div>
                                
							</div>
                            <div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="justify-content-end">
                                        <a class="btn btn-info text-white font-weight-bold" href="../index.php">Voltar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>


            



    <div class="container-fluid display-table">
        <div class="row display-table-row">
        
            <div class="col-md-12 col-sm-12 display-table-cell v-align">
           <br>
                <div class="user-dashboard">
                    <h1>Olá, <?php echo $user['nome'] ?></h1>
                    <?php if($user_->isAdmin()){  include __DIR__."/admin.php"; } ?>
                    <br>
                </div>
            </div>
        </div>
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
</html>
