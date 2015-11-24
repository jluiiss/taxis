@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'registro.store','method'=>'POST'])!!}
  <div class="form-group">

      {!!Form::label('Hora de salida:')!!}
      {!!Form::time('horaSalida',null,['class'=>'form-control','placeholder'=>'salida'])!!}

      {!!Form::label('hora de llegada:')!!}
      {!!Form::time('holaLlegada',null,['class'=>'form-control','placeholder'=>'llegada'])!!}

      {!!Form::label('Destino:')!!}
      {!!Form::text('Destino',null,['class'=>'form-control','placeholder'=>'Destino'])!!}

      {!!Form::label('ref placa:')!!}
      {!!Form::text('refPlaca',null,['class'=>'form-control','placeholder'=>'refplaca'])!!}

      {!!Form::label('ref tarifa:')!!}
      {!!Form::text('refTarifa',null,['class'=>'form-control','placeholder'=>'reftarifa'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

