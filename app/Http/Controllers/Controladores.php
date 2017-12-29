<?php

namespace App\Http\Controllers;
use Illuminate\Session\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class Controladores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultar(){

        return view('consultar');

    }

    public function index(){

        $user = DB::table('users')->get();

        return view('modificar')->with('users', $user);

    }

    public function vistaModificar($id){

        $user = DB::table('users')->where('id','=',$id)->get();

        return view('modificar')->with('users', $user);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    //buscar
    public function search(Request $request)
    {

        $name = $request->input('name');

        $users = DB::table('users')->where('name', 'like', '%' . $name . '%')->get();

        if (empty($users)){
            return view('error.404');
        }else{
            return view('listado')->with('users', $users);
        }

    }

    public function search(Request $request)
    {

        $name = $request->input('name');

        $users = DB::table('users')->where('name', 'like', '%' . $name . '%')->get();

        if (empty($users)){
            return view('error.404');
        }else{
            return view('listado')->with('users', $users);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();

        return view('listadoCompleto')->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        // show the edit form and pass the nerd
        return view('modificarFicha')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        // store
        $user = User::find($id);

        $user->name = Input::get('name');
        $user->usuario = Input::get('usuario');
        $user->perfil = Input::get('perfil');
        $user->save();

        //redirect
        //Session::flash('message', 'Successfully updated nerd!');
        return view('listado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = DB::table('users')->where('id', '=', $id)->delete();
        //Session::flash('message','Usuario borrado correctamente');
        //return view('modificar')->with('users',$user);
    }

}
