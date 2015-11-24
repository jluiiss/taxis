@extends('layouts.admin')
@section('content')
@include('alerts.success')

  <table class="table">
  <thead>
    <th>Salida</th>
    <th>llegada</th>
    <th>Destino</th>
    <th>ref placa</th>

  </thead>
  @foreach($users as $user)

  <tbody>
  <td>{{$user->horaSalida}}</td>
  <td>{{$user->horaLlegada}}</td>
  <td>{{$user->Destino}}</td>
  <td>{{$user->refPlaca}}</td>


  <td>{!!link_to_route('registro.edit',$title='Editar-Eliminar',$parameters=$user->id,$attributes=[
  'class'=>'btn btn-primary']);!!}</td>
  <!--
  <td>{{$user->password}}</td>
  <td></td>-->
  </tbody>
  @endforeach
  {!!link_to_route('registro.create',$title='Agregar',['class'=>'btn btn-primary']);!!}
  <!--<tbody>
     <td colspan=2>
         <style type="text/css">
         li {
         	list-style::none;
         	margin:0;
         	padding:0;
         	margin:2px;
         	padding:2px;
         	float:left;//para eliminar el comportamiento de elemento de bloque(salto de linea)
         }
         </style>
  {!!$users->render()!!}para paginacion
  </td>
  </tbody>-->
  </table>
@stop			 