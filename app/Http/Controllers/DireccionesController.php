<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\direcciones;
use Redirect;
use Session;

class DireccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=direcciones::paginate(20);
      return view('direcciones.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direcciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        direcciones::create([
        'NombreColonia'=>$request['NombreColonia'],
        'NombreCalle'  =>$request['NombreCalle'],
        'NumeroCalle'  =>$request['NumeroCalle'],
        'Ciudad'       =>$request['Ciudad'],
        'Estado'       =>$request['Estado'],]);

           // return "usuario".$request['password']."registrado";
        return redirect('/direcciones')->with('message','store');
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
        $user=direcciones::find($id);
        return view('direcciones.edit',['user'=>$user]);
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
        $user=direcciones::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Direcciones fue editado');
        return Redirect::to('/direcciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        direcciones::destroy($id);
        Session::flash('message','Direcccion eliminada');
        return Redirect::to('/direcciones');
    }
}
