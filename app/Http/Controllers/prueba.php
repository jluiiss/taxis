<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;

use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;

class prueba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        //$this -> middleware('auth');
    }
    public function index()
    {
          return view('index');

    }

    public function home()
    {

    	return view ('home');
    }

      public function registro()
    {

    	return view ('registro');
    }
public function admin()
    {

      return view ('admin.index');
    }
    public function login()
    {

      return view ('login');
    }
    
 }
