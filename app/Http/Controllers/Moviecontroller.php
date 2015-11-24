<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;

use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;

class Moviecontroller extends Controller
{
    public function index()
    {
        return "Hola estoy en el index";
    }

    public function create()
    {
        return "Esto seria el formulario create";
    }


}
