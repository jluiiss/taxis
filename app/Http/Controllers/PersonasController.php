<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\personas;
use Redirect;
use Session;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=personas::paginate(20);
        return view('personas.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        personas::create([
        'Nombre'      =>$request['Nombre'],
        'Apellidos'   =>$request['Apellidos'],
        'Edad'        =>$request['Edad'],
        'Telefono'    =>$request['Telefono'],
        'refDireccion'=>$request['refDireccion'],]);

           // return "usuario".$request['password']."registrado";
        return redirect('/personas')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=personas::find($id);
        return view('personas.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=personas::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Personas fue editado');
        return Redirect::to('/personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        personas::destroy($id);
        Session::flash('message','Persona elimada');
        return Redirect::to('/personas');
    }
}
