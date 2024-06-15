<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBoardController extends Controller
{

    public function index()
    {
        return view('myboard.index');
    }
}
