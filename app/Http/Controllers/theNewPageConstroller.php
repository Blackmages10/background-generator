<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class theNewPageConstroller extends Controller
{
    //
    public function index(){
        return view('newProject.index');
    }
    public function about(){
        return view('newProject.about');
    }
    public function app(){
        return view('layouts.app');
    }

}
