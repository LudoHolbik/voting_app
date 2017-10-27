<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pollController extends Controller
{
    public function create_poll () {
        $view = view('poll_app/user_option');
        return $view;
      
    }

    public function store_poll(){

        $create_poll = DB::insert('insert into poll (poll_name, poll_desc) values (?, ?)', [$_POST['poll_name'], $_POST['desc']]);
        var_dump($create_poll);
    
    }
}
