@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'personas.store','method'=>'POST'])!!}
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

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

