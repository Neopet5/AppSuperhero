<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenApi extends Controller
{
    public function index(){
        $genders = Gender::with('superheroes')->get();
        return response()->json($genders);
    }

    public function show($name){
        $gender = Gender::where('name',$name)->with('superheroes')->get();
        return response()->json($gender);
    }
}
