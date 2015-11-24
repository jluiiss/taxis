<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;

use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;

class Froncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('\login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function mision()
    {
        return view('mision');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function vision()
    {
        return view('vision');
    }

   
}
