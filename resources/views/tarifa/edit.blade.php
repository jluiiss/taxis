@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['tarifa.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">

     {!!Form::label('Lugar:')!!}
      {!!Form::text('lugar',null,['class'=>'form-control','placeholder'=>'lugar'])!!}

      {!!Form::label('Costo:')!!}
      {!!Form::text('costo',null,['class'=>'form-control','placeholder'=>'costo'])!!}

      {!!Form::label('Tiempo Aprox:')!!}
      {!!Form::text('tiempoAproximado',null,['class'=>'form-control','placeholder'=>'tiempo'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['tarifa.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop