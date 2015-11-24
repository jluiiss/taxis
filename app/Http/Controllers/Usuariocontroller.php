<?php

namespace gpstax\Http\Controllers;

use Illuminate\Http\Request; 
use gpstax\Http\Requests\UserCreateRequest;
use gpstax\Http\Requests\UserUpdateRequest; 
use gpstax\Http\Requests;
use gpstax\Http\Controllers\Controller;
use \gpstax\User;
use Redirect;
use Session;

class Usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      //$users=\gpstax\User::All();
    	 $users=User::paginate(5);
      return view('usuario.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('usuario.create');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([

        'name'=>$request['name'],
        'email'=>$request['email'],
        'password'=>$request['password'],]);
           // return "usuario".$request['password']."registrado";
        return redirect('/usuario')->with('message','store');
    }
/*'password'=>bcrypt($request['password']),]);*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id,UserUpdateRequest $request)
    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/usuario');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
