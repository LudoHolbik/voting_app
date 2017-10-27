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



        $create_poll = DB::insert('insert into poll ( poll_name, poll_desc) values (?, ?)', [$_POST['poll_name'], $_POST['desc']]);
        var_dump($create_poll);
    
    
    }

    public function options () {
        $view = view('poll_app/option');
        return $view;
    }

    public function option ($id) {
        
        $info = DB::table('poll')->where('poll_name', $id)->first();

        //$stmt = DB::select('select poll_id from poll where poll_name = ?' )->get(); 
        //dd($info->poll_id);
       // $stmt -> execute(['miss']);
        //$poll_id = $stmt->fetch();
       // $result = $info['poll_id'];
        //$result = json_decode($info['poll_id'], true);

        $stmt = DB::insert('insert into vote ( poll_id, `option`) values (?, ?)', [$info->poll_id, $_POST['option']]);

    }

    public function create_option() {
        $view = view('poll_app/option');
        return $view;
    }

    public function store_option($id) {
            $stmt = DB::insert('insert into vote ( poll_id, option) values (?, ?)', $id, [$_POST['option']]);
    }
}