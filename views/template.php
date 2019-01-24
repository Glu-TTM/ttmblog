<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Glu">
    <title>TTM Admin | TruetechMoz Adminarea</title>
    <link href="<?php echo BASE_URL; ?>/assets/css/bsstyles.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/assets/css/styles.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/assets/plugins/css/all.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" > -->
    
</head>
<body>
        <header >
            <div class="container topdiv">
                <div class="row">
                    <div class=" col-md-3">
                        <a href="https://ttmblog.herokuapp.com"><img class="logo" src="http://localhost/ttmblog/assets/images/truetech.gif"></a>
                    </div>
                    <div class="col-md-6 ">
                        <form class="form-inline">
                        <input class="form-control col-md-10 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                        </form>
                    </div>
                    <div class="col-md-3 logo">
                        <ul class="social-network social-circle ">
                        <li><a class="a-social" href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a class="a-social" href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="a-social" href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="a-social" href="#" class="icoLinkedin" title="Linkedin"><i class="fas fa-user-circle"></i></a></li>
                    </ul>
                    </div>
                </div>   
            </div>
                
            <nav class="navbar  navbar-expand-lg navbar-light top-navbar default-navback" data-toggle="sticky-onscroll">
                <div class="container ">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav pull-right ">
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Tutorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Android</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Code</a>
                            </li>
                            <li class="nav-item text-white">
                                <a class="nav-link  text-white" href="#">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Contact</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>

        </header>
        
	<?php $this->loadViewInTemplate($viewName, $viewData ); ?>
              

	<script src="<?php echo BASE_URL; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/scripts.js"></script>
    <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.js"></script>
    

</body>
</html>