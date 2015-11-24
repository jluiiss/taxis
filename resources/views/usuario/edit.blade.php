@extends('layouts.admin')
@section('content')
@include('alerts.request')

{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">
    {!!Form::label('Usuario:')!!}
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Cuenta'])!!}
{!!Form::label('email:')!!}
      {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'alguien@dominio.com'])!!}
    
     {!!Form::label('Password:')!!}
      {!!Form::password('password',['class'=>'form-control','placeholder'=>'********'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop