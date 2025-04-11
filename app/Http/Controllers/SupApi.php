<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use Illuminate\Support\Facades\Validator;

class SupApi extends Controller
{

    public function index()
    {

        $superheroes = Superhero::with('universe', 'gender')->get();
        return response()->json($superheroes);
    }


    public function show($name)
    {
        $superhero = Superhero::where('name', $name)
                              ->with('universe', 'gender')
                              ->first();

        if (!$superhero) {
            return response()->json(['error' => 'Superhero not found'], 404);
        }

        return response()->json($superhero);
    }

}
