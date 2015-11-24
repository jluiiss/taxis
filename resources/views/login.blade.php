<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Iniciar Sesion</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">
  @include('alerts.errors')
  @include('alerts.request')
    <div class="container">

      {!!Form::open(['route'=>'log.store','method'=>'POST','class'=>'login-form'])!!}
      <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
            {!!Form::label('Correo: ')!!}
            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'ingresa tu correo'])!!}
            
            {!!Form::label('Contraseña: ')!!}
            {!!Form::password('password',['class'=>'form-control','placeholder'=>'*****'])!!}
            
        
        {!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
        </div></div>
        {!!Form::close()!!}

    </div>


  </body>
</html>
