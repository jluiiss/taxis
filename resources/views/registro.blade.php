@extends('layouts.principal')
@section('content')

<form action="/contacto/enviar" method="post">
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
    <label class="label_title"> Email:</label><input type="email" autocomplete="off" placeholder="olijucesar92@gmail.com" 
    required></div> 

       <div class="element_form">
    <label class="label_title"> Telefono: </label><input type="tel" name="telefono" autocomplete="off" placeholder="9581138397"
    pattern="[0-9]{10}" required></div>

       <div class="element_form">
    <label class="label_title"> Observaciones: </label> <textarea rows="1" cols="15" placeholder="Observaciones" required></textarea></div>

       <div class="element_form submit">
   <input type="submit" name="submit" value="Enviar" class="submit" />
   </div>
   </form>

   @stop