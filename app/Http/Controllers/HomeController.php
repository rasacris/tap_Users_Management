<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$users = DB::table('users')->get();
        $users = DB::table('users')
            ->orderByRaw('dni')
            ->get();
        $count = count($users);
        return view('home')->with('users', $users)->with('count', $count);
    }

}
