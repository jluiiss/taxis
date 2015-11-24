<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\vehiculo;
use Redirect;
use Session;

class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=vehiculo::paginate(20);
        return view('vehiculo.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        vehiculo::create([
        'Placas'  =>$request['Placas'],
        'Modelo'   =>$request['Modelo'],
        'refChofer'=>$request['refChofer'],]);
        return redirect('/vehiculo')->with('message','store');
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
        $user=vehiculo::find($id);
        return view('vehiculo.edit',['user'=>$user]);
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
        $user=vehiculo::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','El vehiculo fue editado');
        return Redirect::to('/vehiculo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vehiculo::destroy($id);
        Session::flash('message','vehiculo elimada');
        return Redirect::to('/vehiculo');
    }
}
