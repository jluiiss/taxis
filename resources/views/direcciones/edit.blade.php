@extends('layouts.admin')
@section('content')


{!!Form::model($user,['route'=>['direcciones.update',$user->id],'method'=>'PUT'])!!}
  <div class="form-group">
      {!!Form::label('Nombre de la colonia:')!!}
      {!!Form::text('NombreColonia',null,['class'=>'form-control','placeholder'=>'colonia'])!!}

      {!!Form::label('Nombre de la Calle:')!!}
      {!!Form::text('NombreCalle',null,['class'=>'form-control','placeholder'=>'calle'])!!}


      {!!Form::label('Numero de la Calle:')!!}
      {!!Form::text('NumeroCalle',null,['class'=>'form-control','placeholder'=>'numero'])!!}

      {!!Form::label('Ciudad:')!!}
      {!!Form::text('Ciudad',null,['class'=>'form-control','placeholder'=>'ciudad'])!!}

      {!!Form::label('Estado:')!!}
      {!!Form::text('Estado',null,['class'=>'form-control','placeholder'=>'calle'])!!}

      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 
    {!!Form::open(['route'=>['direcciones.destroy',$user->id],'method'=>'DELETE'])!!}
    {!!Form::submit('Eliminar',['class'=>'btn-danger'])!!}
    {!!Form::close()!!}

@stop