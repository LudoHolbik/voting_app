<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pollController extends Controller
{
    public function create_poll () {
        $view = view('poll_app/user_option');
        return $view;
    }
}
