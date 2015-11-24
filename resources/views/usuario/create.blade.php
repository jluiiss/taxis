@extends('layouts.admin')
@section('content')
@include('alerts.request')


{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
  <div class="form-group">
    {!!Form::label('Usuario:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Cuenta'])!!}
    {!!Form::label('email:')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'alguien@dominio.com'])!!}
     {!!Form::label('Password:')!!}
      {!!Form::password('password',['class'=>'form-control','placeholder'=>'********'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

<!--<form action="">
<div class="form-group">
<br></br>
  <label for=""> Nombre: </label>
  <input type="text" class="form-control">
  </div>
<br></br>
  <div class="form-group">
  <label for="">Correo: </label>
  <input type="text" class="form-control">
  </div>
<br></br>
  <div class="form-group">
  <label for=""> Password: </label>
  <input type="password" class="form-control">
  </div> 

<button class="btn" btn-primary>Registrar </button>
</form> 


-->