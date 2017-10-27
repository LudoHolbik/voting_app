<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('home');
    }

    public function register() {

        $create_poll = DB::insert('insert into users (name, email,password,updated_at,created_at) values (?, ?, ?, ?, ?)', [$_POST['name'], $_POST['email'],$_POST['password'] ]);
        //var_dump($create_poll);
    
    }
}
