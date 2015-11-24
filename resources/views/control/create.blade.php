@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'control.store','method'=>'POST'])!!}
  <div class="form-group">

      {!!Form::label('Fecha:')!!}
      {!!Form::date('Fecha',null,['class'=>'form-control','placeholder'=>'dd/mm/aa'])!!}

      {!!Form::label('ref Registro:')!!}
      {!!Form::text('refRegistro',null,['class'=>'form-control','placeholder'=>'registro'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

