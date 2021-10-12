<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./assets/images/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">  
      
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container-fluid">
                <div class="branding">
                    <h1 class="logo">
                        <a href="./">
                            <img src="assets/images/logo.jpg">
                        </a>
                    </h1>
                    
                </div><!--//branding-->

                <nav class="navbar navbar-expand-lg mt-4 d-md-none navbar-dark bg-dark" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <a class="navbar-brand">Menu</a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">                            
                            <a class="nav-link <?php echo ($page == "home") ? "active-static" : ""; ?>" href="./">1) Download</a>
                        </li>
                        <li class="nav-item active">                            
                            <a class="nav-link <?php echo ($page == "installation") ? "active-static" : ""; ?>" href="installation.php">2) Installation</a>
                        </li>
                        <li class="nav-item active">                            
                            <a class="nav-link <?php echo ($page == "v-b-installation") ? "active-static" : ""; ?>" href="vertual-box-installation.php">3) Vertual Box Installation</a>
                        </li>
                        <li class="nav-item active">                            
                            <a class="nav-link <?php echo ($page == "vidoo-login") ? "active-static" : ""; ?>" href="vidoo-login.php">4) Vidoo App Login</a>
                        </li>
                        <li class="nav-item active">                            
                            <a class="nav-link <?php echo ($page == "vidoo-interface") ? "active-static" : ""; ?>" href="vidoo-interface.php">5) Vidoo App Interface</a>
                        </li>
                        <li class="nav-item active">                            
                        <a class="nav-link <?php echo ($page == "contact-us") ? "active-static" : ""; ?>" href="contact-us.php">Contact us</a>
                        </li>
                    </div>
               </nav>
                
                <!--ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
                </ol-->
                
                <!--div class="top-search-box mt-4">
	                 <form class="form-inline search-form justify-content-center" action="" method="get">
	            
			            <input type="text" placeholder="Search..." name="search" class="form-control search-input">
			            
			            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
			            
			        </form>
                </div-->
                
            </div><!--//container-->
        </header><!--//header-->