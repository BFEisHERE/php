<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class App extends Controller
{
    function test($isim){
        return "Hayırlı Nöbetler Babayiğit ".$isim;
    }
    function  test2(){
        return view('ornek');
    }
    function test3(){
        $x=7;
        $y=3;
        $topla=$x+$y;
        return "x=$x ve y=$y sayılarının toplamları=$topla";
    }
    function test4($isim){
        return view('ornek',['ad'=>$isim]);
    }
}
