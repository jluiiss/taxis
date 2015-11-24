@extends('layouts.admin')

@section('content')
@include('alerts.success')


  <table class="table">
  <thead>
    <th>RFC</th>
    <th>Nombre empresa</th>
    <th>Telefono</th>
  </thead>
  @foreach($users as $user)

  <tbody>
  <td>{{$user->RFC}}</td>
  <td>{{$user->Nom_Empresa}}</td>
  <td>{{$user->Telefono}}</td>
  <td>{!!link_to_route('empresa.edit',$title='Editar-Eliminar',$parameters=$user->id,$attributes=[
  'class'=>'btn btn-primary']);!!}</td>
  <!--
  <td>{{$user->password}}</td>
  <td></td>-->
  </tbody>
  @endforeach
  {!!link_to_route('empresa.create',$title='Agregar',['class'=>'btn btn-primary']);!!}
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