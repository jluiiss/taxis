@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'vehiculo.store','method'=>'POST'])!!}
  <div class="form-group">

      {!!Form::label('Placas:')!!}
      {!!Form::text('Placas',null,['class'=>'form-control','placeholder'=>'idPlaca'])!!}

      {!!Form::label('Modelo:')!!}
      {!!Form::text('Modelo',null,['class'=>'form-control','placeholder'=>'modelo'])!!}

      {!!Form::label('ref chofer:')!!}
      {!!Form::text('refChofer',null,['class'=>'form-control','placeholder'=>'chofer'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

