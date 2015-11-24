@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['vehiculo.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">
      {!!Form::label('Placas:')!!}
      {!!Form::text('Placas',null,['class'=>'form-control','placeholder'=>'Placas'])!!}

      {!!Form::label('Modelo:')!!}
      {!!Form::text('Modelo',null,['class'=>'form-control','placeholder'=>'modelo'])!!}

      {!!Form::label('ref chofer:')!!}
      {!!Form::number('refChofer',null,['class'=>'form-control','placeholder'=>'chofer'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['vehiculo.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop


      
