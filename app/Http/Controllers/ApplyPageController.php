<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyPageController extends Controller
{
    public function index(){
        return view('form');
    }
}
