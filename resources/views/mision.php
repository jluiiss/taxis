

<!DOCTYPE html>
 <html lang="es" class="no-js">
    <head>
        <meta charset="UTF-8"/>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Ferreteria Maya</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <meta name="description" content="Entrada a la base de datos" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link href=”css/movil.css” rel=”stylesheet” type=”text/css” media=”handheld, only screen and (max-device-width: 480px)” />
        <link href=”css/escritorio.css” rel=”stylesheet” type=”text/css” media=”screen and (min-width: 481px)” />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; Puerto Angel </strong>Oaxaca
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Soporte</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Ferreteria <span>Maya</span></h1>
				<nav class="codrops-demos">
					<span>Click en los botones para cambiar de usuario </span>
					<a href="index.php" class="current-demo">Administrador</a>
					<a href="index2.php">Sucursal 1</a>
					<a href="index3.php">Sucursal 2</a>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form class="login" action="Validacion.php"  method="POST"> 
                                <h1>entrar</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Ingrese la contraseña </label>
                                    <input id="username"  name="username" required="required" type="text" placeholder="Administrador" disabled="true" />
                                </p>
                                <p>
                                    <input id="password" name="contra" required="required" type="password" placeholder="Ingrese su contraseña" /> 
                                    <input type="hidden" name="usernum" value='administra'>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Continuar" /> 
								</p>
                                <p class="change_link">

								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
    <footer id="pie">
                 Derechos Reservados &copy; 2014-2015
           </footer>
</html>
