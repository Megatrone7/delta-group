<?php

namespace App\Http\Controllers;

use App\Http\Requests\vilarequest;
use Illuminate\Http\Request;
use App\Models\Vila;

class VilaController extends Controller
{
    public function create(){


        return view('form');


    }
    public function store(vilarequest $request){

        Vila::create($request->all());
        return redirect()->route('form.create')->with('alert','حلال');





    }
}
