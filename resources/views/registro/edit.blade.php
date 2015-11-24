@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['registro.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">
      
      {!!Form::label('Hora de salida:')!!}
      {!!Form::time('horaSalida',null,['class'=>'form-control','placeholder'=>'salida'])!!}

      {!!Form::label('hora de llegada:')!!}
      {!!Form::time('horaLlegada',null,['class'=>'form-control','placeholder'=>'llegada'])!!}

      {!!Form::label('Destino:')!!}
      {!!Form::text('Destino',null,['class'=>'form-control','placeholder'=>'Destino'])!!}

      {!!Form::label('ref placa:')!!}
      {!!Form::text('refPlaca',null,['class'=>'form-control','placeholder'=>'refplaca'])!!}

      {!!Form::label('ref tarifa:')!!}
      {!!Form::text('refTarifa',null,['class'=>'form-control','placeholder'=>'reftarifa'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['registro.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop