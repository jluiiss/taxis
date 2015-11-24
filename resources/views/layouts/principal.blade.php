<!doctype <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Taxis</title>
	<meta description="aplicacion de taxis"/>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">  


	<link rel="stylesheet" type="text/css" href="css/media-queries.css">-->

{!!Html::Style('css1/bootstrap.min.css')!!}
{!!Html::Style('css1/freelancer.css')!!}
{!!Html::Style('font-awesome/css/font-awesome.min.css')!!}
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
               <img src="img/logo5.png"> <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Centenario SA de CV</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Inicio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Servicios</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contacto</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://localhost:8000/log">Administrador</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                @yield('content')
                    
                </div>
            </div>
        </div>
    </header>
	
	<footer class="text-center">
		<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
	</footer>
<script src="js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js1/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js1/classie.js"></script>
    <script src="js1/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js1/jqBootstrapValidation.js"></script>
    <script src="js1/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js1/freelancer.js"></script>
</body>
</html>
