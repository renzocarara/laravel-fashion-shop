<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Cloth;


class ClothController extends Controller
{
    public function fullList(){
        $collection=Cloth::all();
        return view('home',['catalogo' => $collection]);
    }
}
