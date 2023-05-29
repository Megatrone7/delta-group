<?php

namespace App\Http\Controllers;

use App\Models\Baq;
use App\Models\Vila;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $vilas=Vila::all();
        $baqs=Baq::all();


        return view('index',[
             'vilas'=>  $vilas,
               'baqs'=> $baqs,


        ]);






    }
}



