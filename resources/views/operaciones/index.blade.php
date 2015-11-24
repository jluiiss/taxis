@extends('layouts.principal')
@section('content')
<?php $message=Session::get('messsage')?>
@if($message=='store')

Informacion correcta
@endif
  <table class="table2">
  <thead>
    <th>nombre</th>
    <th>apellidos</th>
  
    <th>email</th>
    <th>telefono</th>
   
  </thead>
  @foreach($users as $user)

  <tbody>
  <td>{{$user->nombre}}</td>
  <td>{{$user->apellidos}}</td>
 
        <td>{{$user->email}}</td>
          <td>{{$user->telefono}}</td>
        
  <td></td>
  </tbody>
  @endforeach
  </table>
@stop