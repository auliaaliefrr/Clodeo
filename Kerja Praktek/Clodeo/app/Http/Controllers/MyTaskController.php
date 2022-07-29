<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTaskController extends Controller
{
    public function index()
    {
        return view('mytask');
    }
}
