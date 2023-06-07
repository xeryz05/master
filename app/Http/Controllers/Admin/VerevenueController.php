<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Verevenue;
use Illuminate\Http\Request;

class VerevenueController extends Controller
{
    public function index()
    {
        $verevenues = Verevenue::get();
        return view('admin.revenuesVE.index', compact('verevenues'));
    }
}
