<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MichaelController extends Controller
{
    //
    public function michael(){
        $pamagat = "Ang ginagawa ko dito ay lalaravelvel";
        $title = "Hoy ano tawag mo dito?";
        $data = [
            'productone'=>'iphone',
            'producttwo'=>'samsung',
            'productthree'=>'realme'
        ];
        //compact method:
        //return view('newMichaelProj.mike', compact('pamagat','title'));

        //with method: 
        //return view('newMichaelProj.mike')->with('pamagat',$pamagat);
        //return view('newMichaelProj.mike')->with('data',$data);

        //directly in the view:
        return view('newMichaelProj.mike', [
            'data'=>$data
        ]);

    }
    public function show($name){
        $data = [
            'productone'=>'iphone',
            'producttwo'=>'samsung',
            'productthree'=>'realme'
        ];
        return view('newMichaelProj.joyce',[
            'prod'=>$data[$name] ?? 'Ang Produktong '. $name. ' ay wala sa listahan'
        ]);
    }
    public function display(){
        return view('welcome');
    }
}
