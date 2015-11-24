@extends('layouts.admin')
@section('content')

{!!Form::open(['route'=>'direcciones.store','method'=>'POST'])!!}
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
      {!!Form::text('Estado',null,['class'=>'form-control','placeholder'=>'estado'])!!}

      {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 


@stop

<!--<form action="">
<div class="form-group">
<br></br>
  <label for=""> Nombre: </label>
  <input type="text" class="form-control">
  </div>
<br></br>
  <div class="form-group">
  <label for="">Correo: </label>
  <input type="text" class="form-control">
  </div>
<br></br>
  <div class="form-group">
  <label for=""> Password: </label>
  <input type="password" class="form-control">
  </div> 

<button class="btn" btn-primary>Registrar </button>
</form> 


-->