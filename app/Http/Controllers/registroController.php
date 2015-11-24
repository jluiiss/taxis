<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\registro;
use Redirect;
use Session;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $users=registro::paginate(20);
        return view('registro.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        registro::create([
        'horaSalida' =>$request['horaSalida'],
        'horaLlegada'=>$request['horaLlegada'],
        'Destino'     =>$request['Destino'],
        'refPlaca'    =>$request['refPlaca'],
        'refTarifa'   =>$request['refTarifa'],]);

           // return "usuario".$request['password']."registrado";
        return redirect('/registro')->with('message','store');
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
        $user=registro::find($id);
        return view('registro.edit',['user'=>$user]);
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
        $user=registro::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','el registro fue editada');
        return Redirect::to('/registro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        registro::destroy($id);
        Session::flash('message','Registro elimado');
        return Redirect::to('/registro');
    }
}
