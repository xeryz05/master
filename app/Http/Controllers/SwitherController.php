<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitherController extends Controller
{
    public function index(){
        return view('switcher');
    }
}
