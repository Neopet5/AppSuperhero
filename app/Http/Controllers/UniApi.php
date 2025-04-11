<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniApi extends Controller
{
    public function index(){
        $universes = Universe::with('superheroes')->get();
        return response()->json($universes);
    }

    public function show($name){
        $universe = Universe::where('name',$name)->with('superheroes')->get();
        return response()->json($universe);
    }
}
