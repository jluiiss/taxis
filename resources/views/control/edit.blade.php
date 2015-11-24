@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['control.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">

     {!!Form::label('Fecha:')!!}
      {!!Form::date('Fecha',null,['class'=>'form-control','placeholder'=>'dd/mm/aa'])!!}

      {!!Form::label('ref Registro:')!!}
      {!!Form::text('refRegistro',null,['class'=>'form-control','placeholder'=>'registro'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['control.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop