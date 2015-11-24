@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'tarifa.store','method'=>'POST'])!!}
  <div class="form-group">

      {!!Form::label('Lugar:')!!}
      {!!Form::text('lugar',null,['class'=>'form-control','placeholder'=>'lugar'])!!}

      {!!Form::label('Costo:')!!}
      {!!Form::text('costo',null,['class'=>'form-control','placeholder'=>'costo'])!!}

      {!!Form::label('tiempo Aproximado:')!!}
      {!!Form::text('tiempoAproximado',null,['class'=>'form-control','placeholder'=>'tiempo'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

