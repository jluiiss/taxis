<?php namespace gpstax\Http\Controllers;

class pruebacontroller extends Controller
{
   public function index()
   {
    return "Hola desde controller";
   }
   public function nombre($nombre)
   {
    return "hola el nombre es: ".$nombre;
   }
}
