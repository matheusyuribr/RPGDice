<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ficha;

class FichaController extends Controller
{
    public function index(){

        $fichas = Ficha::all();

        return view('fichas',['fichas'=>$fichas]);
    }


}
