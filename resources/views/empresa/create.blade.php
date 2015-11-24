@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'empresa.store','method'=>'POST'])!!}
  <div class="form-group">
      
      {!!Form::label('RFC:')!!}
      {!!Form::text('RFC',null,['class'=>'form-control','placeholder'=>'RFC'])!!}

      {!!Form::label('Nombre de la empresa:')!!}
      {!!Form::text('Nom_Empresa',null,['class'=>'form-control','placeholder'=>'Empresa'])!!}

      {!!Form::label('Telefono:')!!}
      {!!Form::text('Telefono',null,['class'=>'form-control','placeholder'=>'Telfono'])!!}

      {!!Form::label('referencia checador:')!!}
      {!!Form::text('refchecador',null,['class'=>'form-control','placeholder'=>'checador'])!!}

      {!!Form::label('referencia direccion:')!!}
      {!!Form::text('refdireccion',null,['class'=>'form-control','placeholder'=>'direccion'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop
