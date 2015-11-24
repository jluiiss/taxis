@extends('layouts.principal')
@section('content') 

{!!Form::open(['route'=>'operaciones.store','method'=>'POST'])!!}
  <div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
    <br></br>
        {!!Form::label('Apellidos:')!!}
    {!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos'])!!}
     <br></br>
        {!!Form::label('Edad:')!!}
    {!!Form::number('edad',18,['class'=>'form-control'])!!}
   <br></br>
     {!!Form::label('Fecha Nacimiento:')!!}
    {!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'30/03/93'])!!}
 <br></br>
      {!!Form::label('Correo:')!!}
    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'olijucesar92@gmail.com'])!!}
 <br></br>
   {!!Form::label('Telefono:')!!}
    {!!Form::tel('telefono',null,['class'=>'form-control','placeholder'=>'9581138397'])!!}
 <br></br>
   {!!Form::label('Observaciones:')!!}
    {!!Form::text('observaciones',null,['class'=>'form-control','placeholder'=>'observaciones'])!!}
 <br></br>

      {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}


  </div>
    {!!Form::close()!!} 



<!--<form action="/contacto/enviar" method="post">
  <div class="generic-form">
  <div class="element-form">
    <label class="label_title"> Nombre:</label><input type="text" name="nombre" placeholder="Nombre"
    placeholder="2 <> 10" pattern="[A-Za-Z] {2,10}"
    autofocus
    required></div>

    <label class="label_title"> Apellidos:</label><input type="text" name="apellido" placeholder="Apellidos"
    placeholder="2 <> 10" pattern="[A-Za-Z] {2,10}"
    required></div>
    <div class="element_form">
    <label class="label_title"> Edad:</label><input type="number" id="a" value="18" min="18" max="50"></div>

    <div class="element_form">
    <label class="label_title"> F. de Nacimiento: </label>
    <input type="date" name="fecha_nacimiento" required></div>

    <div class="element_form">
    <label class="label_title"> Email:</label><input type="email" autocomplete="off" placeholder="panter221292@hotmail.com" 
    required></div> 

       <div class="element_form">
    <label class="label_title"> Telefono: </label><input type="tel" name="telefono" autocomplete="off" placeholder="9545889845"
    pattern="[0-9]{10}" required></div>

       <div class="element_form">
    <label class="label_title"> Observaciones: </label> <textarea rows="1" cols="15" placeholder="Observaciones" required></textarea></div>

       <div class="element_form submit">
   <input type="submit" name="submit" value="Enviar" class="submit" />
   </div>
   </form>-->

   @stop