<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenFileController extends Controller
{
    public function index()
    {
        return view('openfile');
    }
}
