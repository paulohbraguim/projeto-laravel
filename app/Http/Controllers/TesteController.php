<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $param1, int $param2){
        //Passando parametros com array associativo
        //return view('site.teste', ['x' => $param1, 'y' => $param2]);

        //Passando parametros com o método compact
        //return view('site.teste', compact('param1', 'param2'));

        //Passando parametros com o método Witch do Laravel
        return view('site.teste')->with('p1', $param1)->with('p2', $param2);
    }
}
