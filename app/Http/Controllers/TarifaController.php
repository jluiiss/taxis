<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request;
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\tarifa;
use Redirect;
use Session;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=tarifa::paginate(20);
        return view('tarifa.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarifa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tarifa::create([
        'lugar'      =>$request['lugar'],
        'costo'      =>$request['costo'],
        'tiempoAproximado'=>$request['tiempoAproximado'],]);

           // return "usuario".$request['password']."registrado";
        return redirect('/tarifa')->with('message','store');
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
        $user=tarifa::find($id);
        return view('tarifa.edit',['user'=>$user]);
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
        $user=tarifa::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','la tarifa fue editada');
        return Redirect::to('/tarifa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tarifa::destroy($id);
        Session::flash('message','Tarifa elimada');
        return Redirect::to('/tarifa');
    }
}
