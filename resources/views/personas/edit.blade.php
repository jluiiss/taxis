@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['personas.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">

     {!!Form::label('Nombre:')!!}
      {!!Form::text('Nombre',null,['class'=>'form-control','placeholder'=>'nombre'])!!}

      {!!Form::label('Apellidos:')!!}
      {!!Form::text('Apellidos',null,['class'=>'form-control','placeholder'=>'apellidos'])!!}

      {!!Form::label('Edad:')!!}
      {!!Form::number('Edad',null,['class'=>'form-control','placeholder'=>'edad'])!!}

      {!!Form::label('Telefono:')!!}
      {!!Form::tel('Telefono',null,['class'=>'form-control','placeholder'=>'telefono'])!!}

      {!!Form::label('referencia Direccion:')!!}
      {!!Form::number('refDireccion',null,['class'=>'form-control','placeholder'=>'direccion'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['personas.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop